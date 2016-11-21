<?php
if(isset($_POST['guardar'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "danielarango990@gmail.com";
$email_subject = "mensaje nuevo";

		$correo = $_POST['correo'];
		$comentario = $_POST['comentario'];
		$nombre = $_POST['nombre'];
		$ciudad = $_POST['ciudad'];

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($correo) || !isset($comentario) || !isset($nombre) || !isset($ciudad)) {

echo "Ocurrió un error y el formulario no ha sido enviado.";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " .$nombre. "\n";
$email_message .= "E-mail: " .$correo. "\n";
$email_message .= "Ciudad: " .$ciudad. "\n";
$email_message .= "Comentarios: " .$comentario. "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$correo."\r\n".
'Reply-To: '.$correo."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message);

echo "¡El formulario se ha enviado con éxito!";
}
?>