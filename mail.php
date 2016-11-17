<?php

$mail = $_GET["mail"];
$nombre = $_GET["nombre"];

$to = $mail . "," . $nombre;
$subject = "Notificación";

$message = "
<html>
<head>
<title>TD - Notificación</title>
</head>
<body>
<p>Esta es una notifiación de Estado.</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <info@trackdelivery.com>' . "\r\n";

mail($to,$subject,$message,$headers);

echo("Notificación enviada");
?>