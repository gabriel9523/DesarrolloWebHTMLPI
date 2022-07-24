<?php
$estado = $_POST['estado'];
$comentarios = $_POST['comentarios'];
$opcion = $_POST['pais'];
$condiciones = $_POST['condiciones'];
$to = 'tumail';
$email_subject = “Nuevo mensaje: de la web”;
$email_body = '|El nombre es<br>'.$nombre 'El mail es<br>'. $email . ;
$headers = “From: $email”;
mail($to, $email_subject, $email_body, $headers);
echo 'Pronto nos estaremos comunicando con usted!'
 ?>
