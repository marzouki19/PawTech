<?php
// twilio-test.php - Version qui lit directement .env.local

require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

echo "==========================================\n";
echo "🔍 TEST DE CONFIGURATION TWILIO\n";
echo "==========================================\n\n";

// Fonction pour lire le fichier .env.local
function getEnvFromFile($key) {
    $files = ['.env.local', '.env'];
    
    foreach ($files as $file) {
        if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                if (strpos($line, '=') !== false && strpos($line, '#') !== 0) {
                    list($k, $v) = explode('=', $line, 2);
                    if (trim($k) === $key) {
                        return trim($v);
                    }
                }
            }
        }
    }
    return null;
}

// Lire les configurations directement depuis .env.local
$accountSid = getEnvFromFile('TWILIO_ACCOUNT_SID');
$authToken = getEnvFromFile('TWILIO_AUTH_TOKEN');
$twilioNumber = getEnvFromFile('TWILIO_PHONE_NUMBER');

echo "📋 CONFIGURATION TROUVÉE DANS .env.local:\n";
echo "----------------------------------------\n";
echo "Account SID: " . ($accountSid ? substr($accountSid, 0, 10) . '...' : '❌ NON DÉFINI') . "\n";
echo "Auth Token: " . ($authToken ? substr($authToken, 0, 5) . '...' : '❌ NON DÉFINI') . "\n";
echo "Twilio Number: " . ($twilioNumber ?: '❌ NON DÉFINI') . "\n";

if (!$accountSid || !$authToken || !$twilioNumber) {
    echo "\n❌ ERREUR: Configuration Twilio incomplète!\n";
    exit(1);
}

echo "\n🔄 TEST DE CONNEXION À TWILIO...\n";

try {
    $client = new Client($accountSid, $authToken);
    
    // Test 1: Vérifier le solde du compte
    echo "\n📊 TEST 1: Vérification du solde... ";
    try {
        $balance = $client->api->v2010->account->balance->fetch();
        echo "✅\n";
        echo "   Solde actuel: {$balance->currency} {$balance->balance}\n";
    } catch (Exception $e) {
        echo "❌\n";
        echo "   Erreur: " . $e->getMessage() . "\n";
    }
    
    // Test 2: Vérifier les numéros Twilio
    echo "\n📞 TEST 2: Vérification des numéros Twilio... ";
    try {
        $numbers = $client->incomingPhoneNumbers->read([], 20);
        if (count($numbers) > 0) {
            echo "✅\n";
            echo "   Numéros disponibles:\n";
            foreach ($numbers as $number) {
                echo "   - {$number->phoneNumber}\n";
            }
            
            // Vérifier que notre numéro configuré est dans la liste
            $found = false;
            foreach ($numbers as $number) {
                if ($number->phoneNumber === $twilioNumber) {
                    $found = true;
                    break;
                }
            }
            if ($found) {
                echo "   ✅ Votre numéro {$twilioNumber} est actif\n";
            } else {
                echo "   ⚠️ Votre numéro {$twilioNumber} n'est pas dans la liste\n";
            }
        } else {
            echo "⚠️ Aucun numéro trouvé\n";
        }
    } catch (Exception $e) {
        echo "❌\n";
        echo "   Erreur: " . $e->getMessage() . "\n";
    }
    
    // Test 3: Envoyer un SMS de test
    echo "\n📱 TEST 3: Envoi d'un SMS de test\n";
    echo "   Entrez le numéro de téléphone à tester (ex: +21692776631) : ";
    $handle = fopen("php://stdin", "r");
    $testNumber = trim(fgets($handle));
    
    if (empty($testNumber)) {
        $testNumber = '+21692776631';
        echo "   Utilisation du numéro par défaut: {$testNumber}\n";
    }
    
    echo "   Envoi du SMS à {$testNumber}... ";
    
    try {
        $message = $client->messages->create(
            $testNumber,
            [
                'from' => $twilioNumber,
                'body' => '✅ Test réussi! Votre configuration Twilio fonctionne correctement sur Symfony.',
            ]
        );
        
        echo "✅ ENVOYÉ!\n";
        echo "   SID: {$message->sid}\n";
        echo "   Statut: {$message->status}\n";
        
        echo "\n==========================================\n";
        echo "✅ TEST RÉUSSI!\n";
        echo "==========================================\n";
        
    } catch (Exception $e) {
        echo "❌ ÉCHEC\n";
        echo "\n❌ ERREUR D'ENVOI:\n";
        echo "================\n";
        echo "Message: " . $e->getMessage() . "\n";
        
        if ($e instanceof \Twilio\Exceptions\RestException) {
            echo "Code: " . $e->getCode() . "\n";
            echo "Statut HTTP: " . $e->getStatusCode() . "\n";
            
            echo "\n🔍 DIAGNOSTIC:\n";
            switch ($e->getCode()) {
                case 21211:
                    echo "❌ Numéro de destination invalide: {$testNumber}\n";
                    break;
                case 21408:
                    echo "❌ Permission refusée - Vérifiez que vous pouvez envoyer des SMS vers ce pays\n";
                    break;
                case 30007:
                    echo "❌ Crédit insuffisant - Rechargez votre compte Twilio\n";
                    break;
                case 21610:
                    echo "❌ Ce numéro a été bloqué\n";
                    break;
                default:
                    echo "❌ " . $e->getMessage() . "\n";
            }
        }
    }
    
} catch (Exception $e) {
    echo "\n❌ ERREUR DE CONNEXION:\n";
    echo "=====================\n";
    echo "Message: " . $e->getMessage() . "\n";
    
    if ($e instanceof \Twilio\Exceptions\RestException) {
        switch ($e->getCode()) {
            case 20003:
                echo "\n🔍 Authentification échouée - Vérifiez votre Account SID et Auth Token\n";
                break;
            case 20404:
                echo "\n🔍 Numéro Twilio invalide - Vérifiez votre TWILIO_PHONE_NUMBER\n";
                break;
        }
    }
}

echo "\n";