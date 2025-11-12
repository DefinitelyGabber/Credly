<?php
if (isset($_POST['user_input'])) {
    $input = trim($_POST['user_input']); // Remove extra whitespace
    // Append input to data.txt safely
    file_put_contents('data.txt', $input . PHP_EOL, FILE_APPEND);
    echo "Your input has been saved!";
} else {
    echo "No input received.";
}
if (file_exists('data.txt')) {
    echo nl2br(file_get_contents('data.txt'));
} else {
    echo "No data yet.";
}


