<?php
// Read database connection info from environment variables
$host = getenv('DB_HOST');
$port = getenv('DB_PORT') ?: 5432;
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

try {
    // Connect to PostgreSQL
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Check if email and password were submitted
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Combine as "email||password"
        $combined = $email . '  ||  ' . $password;

        // Insert combined string into table "submissions"
        $stmt = $pdo->prepare("INSERT INTO submissions (input_text) VALUES (:input)");
        $stmt->execute(['input' => $combined]);

        echo "Your input has been saved!";
    } else {
        echo "Email or password not received.";
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}

