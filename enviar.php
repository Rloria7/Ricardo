<?php
// llamndo a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];

// datos para el correo

$destinatario = "rloria7@gmail.com";
$asunto = "mensaje desde ricardoloria.tech";

$carta = "de: $nombre \n";
$carta .="correo: $correo \n";
$carta .="mensaje $mensaje";

// enviando mensaje
mail($destinatario, $asunto, $carta);
header("location:mensaje-envio.html")

?>