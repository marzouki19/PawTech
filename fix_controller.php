<?php

$file = 'src/Controller/SuiviController.php';
$content = file_get_contents($file);

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

file_put_contents($file, $content);
echo "Constructor updated!\n";
