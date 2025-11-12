<?php
if (isset($_POST['user_input'])) {
    $input = trim($_POST['user_input']); // Remove extra whitespace
    // Append input to data.txt safely
    file_put_contents('data.txt', $input . PHP_EOL, FILE_APPEND);
    echo "Your input has been saved!";
} else {
    echo "No input received.";
}
