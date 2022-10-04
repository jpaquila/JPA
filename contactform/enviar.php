<?php
$nombre =  $_POST['nombre'];
$correo =  $_POST['correo'];
$asunto=  $_POST['asunto'];
$mensaje =  $_POST['mensaje'];

$to="jpaquila@gmail.com";

$headers .= "To: $to" . "\r\n";
$headers .= "From: $nombre <$correo>" . "\r\n";

mail($to,$asunto,$mensaje, $headers);
header('Location:mensaje-de-envio.html')
?>