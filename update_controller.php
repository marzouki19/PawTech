<?php

$file = 'src/Controller/SuiviController.php';
$content = file_get_contents($file);

// Add use statement for AiSymptomsService
$content = str_replace(
    'use App\Repository\SuiviRepository;',
    "use App\Repository\SuiviRepository;\nuse App\\Service\\AiSymptomsService;",
    $content
);

// Replace constructor
$oldConstructor = 'private EntityManagerInterface $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }';

$newConstructor = 'private EntityManagerInterface $entityManager;
    private AiSymptomsService $aiSymptomsService;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        AiSymptomsService $aiSymptomsService
    ) {
        $this->entityManager = $entityManager;
        $this->aiSymptomsService = $aiSymptomsService;
    }';

$content = str_replace($oldConstructor, $newConstructor, $content);

// Replace getOrganSymptoms method
$oldMethod = '// AJAX: Get symptoms for an organ (replaces hardcoded symptoms)
    #[Route(\'/ai-symptoms/{organNumber}\', name: \'app_suivi_ai_symptoms\', methods: [\'GET\'])]
    public function getOrganSymptoms(int $organNumber): JsonResponse
    {
        // Map organ numbers to symptom data
        $symptomsData = [
            1 => [\'organ\' => \'Brain\', \'symptoms\' => \'Head tilt, seizures, disorientation, circling, behavioral changes, loss of balance\'],
            2 => [\'organ\' => \'Lungs\', \'symptoms\' => \'Coughing, wheezing, difficulty breathing, rapid breathing, lethargy, blue gums\'],
            3 => [\'organ\' => \'Heart\', \'symptoms\' => \'Cough, difficulty breathing, fatigue, collapse, rapid heart rate, weakness\'],
            4 => [\'organ\' => \'Liver\', \'symptoms\' => \'Jaundice, vomiting, loss of appetite, weight loss, increased thirst, abdominal swelling\'],
            5 => [\'organ\' => \'Stomach\', \'symptoms\' => \'Vomiting, regurgitation, loss of appetite, abdominal pain, bloating, nausea\'],
            6 => [\'organ\' => \'Guts\', \'symptoms\' => \'Diarrhea, vomiting, abdominal pain, loss of appetite, weight loss, bloating\'],
            7 => [\'organ\' => \'Kidney\', \'symptoms\' => \'Increased thirst, increased urination, vomiting, loss of appetite, lethargy, bad breath\'],
            8 => [\'organ\' => \'Bladder\', \'symptoms\' => \'Blood in urine, frequent urination, straining to urinate, incontinence, abdominal pain\']
        ];

        if (isset($symptomsData[$organNumber])) {
            return new JsonResponse([
                \'success\' => true,
                \'organ\' => $symptomsData[$organNumber][\'organ\'],
                \'symptoms\' => $symptomsData[$organNumber][\'symptoms\'],
                \'organ_number\' => $organNumber
            ]);
        }

        return new JsonResponse([
            \'success\' => false,
            \'error\' => \'Organ not found\'
        ], 404);
    }';

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

$content = str_replace($oldMethod, $newMethod, $content);

file_put_contents($file, $content);

echo "Controller updated successfully!\n";
