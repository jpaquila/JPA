<?php
$nombre =  $_POST['nombre'];
$correo =  $_POST['correo'];
$asunto=  $_POST['asunto'];
$mensaje =  $_POST['mensaje'];

$destinatario = "jpaquila@gmail.com";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Asunto: $asunto \n";
$carta .= "Mensaje: $mensaje";

//envio
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')

?>