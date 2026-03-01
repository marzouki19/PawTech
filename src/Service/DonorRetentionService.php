<?php

namespace App\Service;

use App\Entity\Donation;
use Symfony\Component\Process\Process;

class DonorRetentionService
{
    private string $modelPath;
    private string $pythonPath;

    public function __construct()
    {
        $this->modelPath = dirname(__DIR__, 2) . '/ml/donor_retention';
        $this->pythonPath = 'python'; // Adjust based on system
    }

    /**
     * Check if the ML model is available
     */
    public function isModelAvailable(): bool
    {
        $modelFile = $this->modelPath . '/donor_knn_model.joblib';
        $scalerFile = $this->modelPath . '/scaler.joblib';

        return file_exists($modelFile) && file_exists($scalerFile);
    }

    /**
     * Calculate donor metrics from donations
     *
     * @param array<Donation> $donations
     */
    public function calculateDonorMetrics(array $donations, \DateTimeInterface $lastDonation): array
    {
        if (empty($donations)) {
            return $this->getEmptyMetrics();
        }

        $totalDonations = count($donations);
        $amounts = [];
        $dates = [];

        foreach ($donations as $donation) {
            $amounts[] = $donation->getMontant() ?? 0;
            $dates[] = $donation->getDate();
        }

        // Calculate metrics
        $avgDonationAmount = array_sum($amounts) / $totalDonations;
        $daysSinceLastDonation = (new \DateTime())->diff($lastDonation)->days;

        // Donation frequency (donations per month)
        if (count($dates) > 1) {
            $firstDonation = min($dates);
            $monthsDiff = max(1, (new \DateTime())->diff($firstDonation)->days / 30);
            $donationFrequency = $totalDonations / $monthsDiff;
        } else {
            $donationFrequency = 0;
        }

        // Donation consistency (standard deviation of donation intervals)
        $donationConsistency = $this->calculateConsistency($dates);

        // Additional features (these would typically come from other sources)
        $largestDonation = max($amounts);
        $smallestDonation = min($amounts);
        $campaignsParticipated = 1; // Placeholder
        $volunteerHours = 0; // Placeholder
        $referrals = 0; // Placeholder

        return [
            'total_donations' => $totalDonations,
            'avg_donation_amount' => round($avgDonationAmount, 2),
            'donation_frequency' => round($donationFrequency, 2),
            'days_since_last_donation' => $daysSinceLastDonation,
            'donation_consistency' => round($donationConsistency, 2),
            'largest_donation' => $largestDonation,
            'smallest_donation' => $smallestDonation,
            'campaigns_participated' => $campaignsParticipated,
            'volunteer_hours' => $volunteerHours,
            'referrals' => $referrals
        ];
    }

    /**
     * Predict donor retention using the ML model
     */
    public function predictRetention(array $metrics): array
    {
        if (!$this->isModelAvailable()) {
            return [
                'will_donate_again' => false,
                'confidence' => 0,
                'probability_will_donate' => 0,
                'probability_wont_donate' => 0,
                'risk_level' => 'unknown',
                'error' => 'Model not available'
            ];
        }

        try {
            $scriptPath = $this->modelPath . '/predict_retention.py';
            
            // Use proc_open for better control
            $descriptorspec = [
                0 => ['pipe', 'r'],  // stdin
                1 => ['pipe', 'w'],  // stdout
                2 => ['pipe', 'w'],  // stderr
            ];

            $process = proc_open(
                [$this->pythonPath, $scriptPath, json_encode($metrics)],
                $descriptorspec,
                $pipes,
                null,
                null,
                ['bypass_shell' => true]
            );

            if (!is_resource($process)) {
                throw new \Exception('Failed to start Python process');
            }

            $output = stream_get_contents($pipes[1]);
            $error = stream_get_contents($pipes[2]);

            foreach ($pipes as $pipe) {
                fclose($pipe);
            }

            $returnCode = proc_close($process);

            if ($returnCode !== 0) {
                throw new \Exception('Python script error: ' . $error);
            }

            $result = json_decode($output, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Invalid JSON output from Python: ' . $output);
            }

            return $result;

        } catch (\Exception $e) {
            return [
                'will_donate_again' => false,
                'confidence' => 0,
                'probability_will_donate' => 0,
                'probability_wont_donate' => 0,
                'risk_level' => 'unknown',
                'error' => $e->getMessage()
            ];
        }
    }

    /**
     * Calculate donation consistency (standard deviation of intervals)
     *
     * @param \DateTimeInterface[] $dates
     */
    private function calculateConsistency(array $dates): float
    {
        if (count($dates) < 2) {
            return 100; // Maximum consistency for single donation
        }

        sort($dates);
        $intervals = [];

        for ($i = 1; $i < count($dates); $i++) {
            $intervals[] = $dates[$i]->diff($dates[$i - 1])->days;
        }

        if (empty($intervals)) {
            return 100;
        }

        $mean = array_sum($intervals) / count($intervals);
        
        if ($mean === 0) {
            return 100;
        }

        $variance = array_reduce($intervals, function ($carry, $interval) use ($mean) {
            return $carry + pow($interval - $mean, 2);
        }, 0) / count($intervals);

        $stdDev = sqrt($variance);

        // Convert to 0-100 scale (lower std dev = higher consistency)
        return max(0, 100 - ($stdDev / $mean * 100));
    }

    /**
     * Get empty metrics structure
     */
    private function getEmptyMetrics(): array
    {
        return [
            'total_donations' => 0,
            'avg_donation_amount' => 0,
            'donation_frequency' => 0,
            'days_since_last_donation' => 0,
            'donation_consistency' => 0,
            'largest_donation' => 0,
            'smallest_donation' => 0,
            'campaigns_participated' => 0,
            'volunteer_hours' => 0,
            'referrals' => 0
        ];
    }
}
