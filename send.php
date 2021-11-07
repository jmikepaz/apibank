<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$to = "soporte@solucioneseconomicashn.com";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: juanmpaz2@gmail.com";
 
mail($to, $subject, $message, $headers);

?>