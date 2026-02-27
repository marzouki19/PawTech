<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/radiology')]
class RadiologyController extends AbstractController
{
    #[Route('/triage', name: 'app_radiology_triage', methods: ['GET', 'POST'])]
    public function triage(Request $request): Response
    {
        $analysis = null;
        $error = null;
        $uploadedImageWebPath = null;

        if ($request->isMethod('POST')) {
            $file = $request->files->get('radiology_image');
            if (!$file instanceof UploadedFile) {
                $error = 'Please choose an image file first.';
            } elseif (!$file->isValid()) {
                $error = 'Uploaded file is invalid.';
            } else {
                $allowed = ['jpg', 'jpeg', 'png', 'webp'];
                $ext = strtolower((string) ($file->guessExtension() ?: $file->getClientOriginalExtension()));
                if (!in_array($ext, $allowed, true)) {
                    $error = 'Only JPG, JPEG, PNG, and WEBP are supported.';
                } else {
                    $uploadDir = (string) $this->getParameter('kernel.project_dir') . '/public/uploads/radiology';
                    if (!is_dir($uploadDir)) {
                        @mkdir($uploadDir, 0775, true);
                    }

                    $filename = 'rad_' . date('Ymd_His') . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
                    $file->move($uploadDir, $filename);
                    $absolutePath = $uploadDir . '/' . $filename;
                    $uploadedImageWebPath = 'uploads/radiology/' . $filename;

                    $payload = json_encode([
                        'image_path' => $absolutePath,
                        'mode' => 'triage',
                    ]);

                    if ($payload === false) {
                        $error = 'Unable to prepare analysis payload.';
                    } else {
                        $script = (string) $this->getParameter('kernel.project_dir') . '/ml/radiology_triage.py';
                        $projectDir = (string) $this->getParameter('kernel.project_dir');

                        if (!is_file($script)) {
                            $error = 'Radiology script not found: ml/radiology_triage.py';
                        } else {
                            $command = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'
                                ? ['py', $script]
                                : ['python3', $script];

                            $process = new Process($command, $projectDir);
                            $process->setInput($payload);
                            $process->setTimeout(20);
                            $process->run();

                            if (!$process->isSuccessful()) {
                                $stderr = trim($process->getErrorOutput());
                                $stdout = trim($process->getOutput());
                                $combined = trim($stderr . ' ' . $stdout);
                                if (str_contains(strtolower($combined), 'no module named') || str_contains(strtolower($combined), 'modulenotfounderror')) {
                                    $error = 'Python dependencies missing. Run: py -m pip install -r ml/requirements.txt';
                                } else {
                                    $error = 'Radiology analysis failed: ' . ($combined !== '' ? $combined : 'Unknown process error');
                                }
                            } else {
                                $decoded = json_decode(trim($process->getOutput()), true);
                                if (!is_array($decoded) || !($decoded['success'] ?? false)) {
                                    $error = 'Invalid radiology response.';
                                } else {
                                    $analysis = $decoded;
                                }
                            }
                        }
                    }
                }
            }
        }

        return $this->render('radiology/triage.html.twig', [
            'active' => 'radiology',
            'page_title' => 'Radiology AI Triage',
            'analysis' => $analysis,
            'error' => $error,
            'uploaded_image_web_path' => $uploadedImageWebPath,
        ]);
    }
}
