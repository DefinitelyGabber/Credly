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

    if (isset($_POST['user_input'])) {
        $input = trim($_POST['user_input']);
        // Insert input into table "submissions"
        $stmt = $pdo->prepare("INSERT INTO submissions (input_text) VALUES (:input)");
        $stmt->execute(['input' => $input]);
        echo "Your input has been saved!";
    } else {
        echo "No input received.";
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
