<?php
// llamndo a los campos
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// datos para el correo

$destinatario = "rloria7@gmail.com";
$asunto = "mensaje desde ricardoloria.tech";

$carta = "de: $name \n";
$carta .="email: $email \n";
$carta .="message $mssage";

// enviando mensaje
mail($destinatario, $asunto, $carta);
header("location:mensaje-envio.html")

?>
