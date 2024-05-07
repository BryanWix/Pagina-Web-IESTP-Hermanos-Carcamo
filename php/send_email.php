<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "bryanibarburu@gmail.com"; // Reemplaza con tu correo electrónico
    $subject = "Nuevo mensaje desde el formulario de contacto";
    $body = "Nombre: $name\nCorreo electrónico: $email\nMensaje: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente";
    } else {
        echo "Hubo un error al enviar el mensaje";
    }
}
?>
