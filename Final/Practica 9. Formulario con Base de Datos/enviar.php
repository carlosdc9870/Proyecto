<?php
if(isset($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $destinatario = $email;
    $asunto = "Asunto: " . $asunto;
    $mensaje = "Nombre: " . $nombre . "<br>Email: " . $email . "<br>Mensaje: " . $mensaje;

    mail($destinatario, $asunto, $mensaje);

    echo "<div style='background-color: #f2f2f2; padding: 10px; border-radius: 5px; text-align: center;'>
            <h3 style='color: #009900;'>¡Correo enviado exitosamente!</h3>
            <p style='color: #666666;'>Gracias por contactarnos. Tu mensaje ha sido enviado correctamente.</p>
          </div>";
}
?>
