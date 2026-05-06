<?php
$hashedPassword = password_hash('password123', PASSWORD_BCRYPT, ['cost' => 12]);
$db = new PDO('sqlite:var/app.db');

// Update existing user with plain password
$stmt = $db->prepare('UPDATE "user" SET password = ? WHERE email = ? AND password = ?');
$result = $stmt->execute([$hashedPassword, 'yousseffmaeli@gmail.com', 'password123']);

if ($result) {
    echo "✓ User password updated successfully!\n";
    echo "Email: yousseffmaeli@gmail.com\n";
    echo "Password: password123 (hashed)\n";
} else {
    echo "✗ Failed to update password\n";
}

// Show all users with their hashed status
echo "\n=== Updated User List ===\n";
$result = $db->query('SELECT id, email, status, substr(password, 1, 30) as pwd_hash FROM "user"');
foreach ($result as $row) {
    echo sprintf("Email: %s | Status: %s | Hash: %s...\n", $row['email'], $row['status'], $row['pwd_hash']);
}
