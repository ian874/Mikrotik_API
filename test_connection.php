<?php

echo "🔹 Checking autoload file...\n";
require 'vendor/autoload.php';
echo "✅ Autoload loaded successfully!\n";

use RouterOS\Client;
use RouterOS\Exceptions\SocketException;

echo "🔹 Starting connection test...\n";

// Get credentials from environment variables
$host = getenv('MIKROTIK_HOST') ?: '192.168.10.1';
$user = getenv('MIKROTIK_USER') ?: 'apiuser';
$pass = getenv('MIKROTIK_PASS') ?: 'your_password_here';

try {
    $client = new Client([
        'host' => $host,
        'user' => $user,
        'pass' => $pass,
        'port' => 8728,
        'timeout' => 5,
    ]);

    echo "✅ Connected successfully!\n";
} catch (SocketException $e) {
    echo "❌ Connection failed: " . $e->getMessage() . "\n";
} catch (Exception $e) {
    echo "❌ General error: " . $e->getMessage() . "\n";
}

echo "🔹 Script execution completed.\n";
