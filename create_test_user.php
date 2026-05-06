<?php
$hashedPassword = password_hash('password123', PASSWORD_BCRYPT, ['cost' => 12]);
$sqliteDb = __DIR__ . '/var/app.db';

if (!file_exists($sqliteDb)) {
    echo "Database file not found at: $sqliteDb\n";
    exit(1);
}

try {
    $pdo = new PDO("sqlite:$sqliteDb");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Check if user exists
    $stmt = $pdo->prepare("SELECT id FROM \"user\" WHERE email = ?");
    $stmt->execute(['test@example.com']);
    
    if ($stmt->rowCount() > 0) {
        echo "Test user already exists!\n";
    } else {
        // Insert test user with all required columns
        $stmt = $pdo->prepare("INSERT INTO \"user\" (nom, prenom, email, telephone, password, role, status, user_image, user_face) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([
            'Test',
            'User',
            'test@example.com',
            12345678,
            $hashedPassword,
            'ROLE_USER',
            'Actif',
            'https://via.placeholder.com/150',
            'https://via.placeholder.com/150'
        ]);
        
        echo "✓ Test user created successfully!\n";
        echo "Email: test@example.com\n";
        echo "Password: password123\n";
        echo "Status: Actif\n";
    }
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "\n";
    exit(1);
}
