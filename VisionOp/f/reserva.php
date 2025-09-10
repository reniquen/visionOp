<?php
if (isset($_POST['btnEnviar'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $sucursal = $_POST['sucursal'];
    $dia = $_POST['dia_atencion'];

    $subject = 'Reserva de horas';

    $para = 'correoprueba3006@gmail.com';

    $header = 'From: ' . $nombre;
    $msjCorreo = "Nombre: $nombre\nApellidos: $apellidos\nCorreo: $correo\nNúmero: $telefono\nSucursal: $sucursal\nDía de atención: $dia";

    if (mail($para, $subject, $msjCorreo, $header)) {
        echo "<script language='javascript'>
        alert('Reservación enviada, muchas gracias.');
        window.location.href = '/reservadehoras.html';
        </script>";
    } else {
        echo "<script language='javascript'>
        alert('El envío del mensaje ha fallado. Por favor, inténtelo nuevamente.');
        history.go(-1);
        </script>";
    }
}
?>