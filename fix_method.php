<?php

$file = 'src/Controller/SuiviController.php';
$content = file_get_contents($file);

// Replace getOrganSymptoms method - find the entire method
$pattern = '/\/\/ AJAX: Get symptoms for an organ \(replaces hardcoded symptoms\)\s*\n\s*#\[Route\(\'\/ai-symptoms\/\{organNumber\}\'\,\s*name:\s*\'app_suivi_ai_symptoms\'\,\s*methods:\s*\[\'GET\'\]\)\]\s*\n\s*public function getOrganSymptoms\(int \$organNumber\): JsonResponse\s*\{[^}]+\}/s';

$newMethod = '// AJAX: Get symptoms for an organ (uses AI service)
    #[Route(\'/ai-symptoms/{organNumber}\', name: \'app_suivi_ai_symptoms\', methods: [\'GET\'])]
    public function getOrganSymptoms(int $organNumber): JsonResponse
    {
        // Map organ numbers to organ names
        $organNames = [
            1 => \'Brain\',
            2 => \'Lungs\',
            3 => \'Heart\',
            4 => \'Liver\',
            5 => \'Stomach\',
            6 => \'Guts\',
            7 => \'Kidney\',
            8 => \'Urinary Bladder\'
        ];

        $organName = $organNames[$organNumber] ?? \'Unknown\';

        // Use AI service to generate symptoms (with fallback)
        $result = $this->aiSymptomsService->generateSymptomsForOrgan($organNumber, $organName);

        return new JsonResponse([
            \'success\' => $result[\'success\'],
            \'organ\' => $result[\'organ\'],
            \'symptoms\' => $result[\'symptoms\'],
            \'organ_number\' => $organNumber,
            \'source\' => $result[\'source\'] ?? \'service\'
        ]);
    }';

$content = preg_replace($pattern, $newMethod, $content);

file_put_contents($file, $content);
echo "Method updated!\n";
