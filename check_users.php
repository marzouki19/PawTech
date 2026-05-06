<?php
$db = new PDO('sqlite:var/app.db');
$result = $db->query('SELECT id, email, status, password FROM "user"');

echo "=== Users in Database ===\n";
foreach ($result as $row) {
    echo sprintf(
        "ID: %d | Email: %s | Status: %s | Password Hash: %s...\n",
        $row['id'],
        $row['email'],
        $row['status'],
        substr($row['password'], 0, 30)
    );
}
