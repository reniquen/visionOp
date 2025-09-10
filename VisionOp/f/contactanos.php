<?php
if (isset($_POST['btnEnviarDuda'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $comentarios = $_POST['comentarios'];


    $subject = 'Formulario de Contacto'. " " .$asunto;

    $para = 'correoprueba3006@gmail.com';

    $header = 'From: ' . $nombre;
    $msjCorreo = "Nombre: $nombre\nApellido: $apellido\nCorreo: $correo\nAsunto: $asunto\nComentarios: $comentarios";

    if (mail($para, $subject, $msjCorreo, $header)) {
        echo "<script language='javascript'>
        alert('Mensaje enviado, muchas gracias.');
        window.location.href = '/sucursales.html';
        </script>";
    } else {
        echo "<script language='javascript'>
        alert('El envío del mensaje ha fallado. Por favor, inténtelo nuevamente.');
        history.go(-1);
        </script>";
    }
}
?>