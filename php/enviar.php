<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$numero = $_POST['numero'];

$destinatario = "lacp532.la@gmail.com";
$asunto = "Contacto Nuevo Web";

$cuerpo = "De: $nombre \n";
$cuerpo .= "Correo: $correo \n";
$cuerpo .= "Numero: $numero";

mail($destinatario,$asunto,$cuerpo);
?>