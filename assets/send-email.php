<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mail("april_mp@outlook.com", "New Message from $name", $message, "From: $email");
}
?>
