<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");

$to = "soporte@solucioneseconomicashn.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: juanmpaz2@gmail.com";
 
mail($to, $subject, $message, $headers);

?>