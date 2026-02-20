<?php
// src/Service/TwilioNotificationService.php

namespace App\Service;

use Twilio\Rest\Client;
use Psr\Log\LoggerInterface;

class TwilioNotificationService
{
    private ?Client $twilio = null;
    private string $twilioPhoneNumber;
    private LoggerInterface $logger;
    private bool $isConfigured;

    public function __construct(
        ?string $accountSid,
        ?string $authToken,
        ?string $twilioPhoneNumber,
        LoggerInterface $logger
    ) {
        $accountSid = trim((string) $accountSid);
        $authToken = trim((string) $authToken);
        $this->twilioPhoneNumber = trim((string) $twilioPhoneNumber);
        $this->logger = $logger;
        
        // Check if Twilio credentials are properly configured
        $this->isConfigured = $accountSid !== '' && $authToken !== '' && $this->twilioPhoneNumber !== '';
        
        if ($this->isConfigured) {
            $this->twilio = new Client($accountSid, $authToken);
        } else {
            $this->logger->warning('Twilio is not configured. SMS notifications will be disabled.');
        }
    }

    public function sendConsultationNotification(
        string $veterinarianPhone,
        string $veterinarianName,
        string $dogName,
        string $consultationType,
        string $consultationDate
    ): bool {
        // Skip if Twilio is not configured
        if (!$this->isConfigured || !$this->twilio) {
            $this->logger->info("SMS notification skipped (Twilio not configured): to {$veterinarianPhone}");
            return false;
        }

        try {
            $message = sprintf(
                "Nouvelle consultation ajoutée pour %s.\n" .
                "Chien: %s\n" .
                "Type: %s\n" .
                "Date: %s\n" .
                "Veuillez consulter votre tableau de bord pour plus de détails.",
                $veterinarianName,
                $dogName,
                $consultationType,
                $consultationDate
            );

            $this->twilio->messages->create(
                $veterinarianPhone,
                [
                    'from' => $this->twilioPhoneNumber,
                    'body' => $message,
                ]
            );

            $this->logger->info("SMS sent to veterinarian: {$veterinarianPhone}");
            return true;
        } catch (\Exception $e) {
            $this->logger->error("Failed to send SMS to {$veterinarianPhone}: " . $e->getMessage());
            return false;
        }
    }
}
