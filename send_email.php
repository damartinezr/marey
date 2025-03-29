<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "marey.inc@gmail.com"; // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: " . $name . "\nEmail: " . $email . "\nMensaje: " . $message;
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Acceso no permitido.";
}
?>