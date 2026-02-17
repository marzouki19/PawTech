<?php
// src/Service/TwilioNotificationService.php

namespace App\Service;

use Twilio\Rest\Client;
use Psr\Log\LoggerInterface;

class TwilioNotificationService
{
    private Client $twilio;
    private string $twilioPhoneNumber;
    private LoggerInterface $logger;

    public function __construct(
        string $accountSid,
        string $authToken,
        string $twilioPhoneNumber,
        LoggerInterface $logger
    ) {
        $this->twilio = new Client($accountSid, $authToken);
        $this->twilioPhoneNumber = $twilioPhoneNumber;
        $this->logger = $logger;
    }

    public function sendConsultationNotification(
        string $veterinarianPhone,
        string $veterinarianName,
        string $dogName,
        string $consultationType,
        string $consultationDate
    ): bool {
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