<?php

require __DIR__.'/vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;

echo "Testing QR code generation...\n";

// Check classes exist
echo "QrCode class exists: " . (class_exists(QrCode::class) ? 'YES' : 'NO') . "\n";
echo "PngWriter class exists: " . (class_exists(PngWriter::class) ? 'YES' : 'NO') . "\n";
echo "Encoding class exists: " . (class_exists(Encoding::class) ? 'YES' : 'NO') . "\n";

// Check GD extension
echo "GD extension loaded: " . (extension_loaded('gd') ? 'YES' : 'NO') . "\n";

try {
    // Test QR code generation
    $qrData = "Test QR Code Data";
    
    $qrCode = new QrCode($qrData);
    $qrCode->setEncoding(new Encoding('UTF-8'));
    $qrCode->setSize(250);
    $qrCode->setMargin(10);
    
    $writer = new PngWriter();
    $result = $writer->write($qrCode);
    
    $pngData = $result->getString();
    
    echo "QR code generated successfully!\n";
    echo "QR code size: " . strlen($pngData) . " bytes\n";
    
    // Save to file
    file_put_contents(__DIR__.'/test_qrcode.png', $pngData);
    echo "Saved to test_qrcode.png\n";
    
} catch (\Throwable $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "Trace: " . $e->getTraceAsString() . "\n";
}
