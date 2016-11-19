<?php
if($_POST['guardar'])
{
	$correo = $_POST['correo'];
	$comentario = $_POST['comentario'];
	$nombre = $_POST['nombre'];
	$ciudad = $_POST['ciudad'];

	if(empty($correo))
	{
		echo "El correo es obligatorio<br>";
	}
	else if(empty($comentario))
	{
		echo "El comentario es obligatorio<br>";
	}
	else
	{
		$mail = "johnnyalexandersepulveda@gmail.com";
		$mensaje = "$correo ha enviado un mensaje.<br>";
		$mensaje .= "su correo es $correo y escribe desde la ciudad de $ciudad .Su mensaje es:<br>";
		$mensaje .= $comentario;
		$cabecera = "MIME-Version: 1.0\r\n";
		$cabecera .= "Content-type:text/html; charset=UTF-8\r\n";
		$cabecera .= "From: ".$_POST['correo']."\r\n";
		$cabecera .= "Reply-to: $correo\r\n";
		$asunto = "$nombre ha enviado un email";
        
		if(mail($mail, $asunto, $mensaje, $cabecera))
			{
				echo "Su comentario ha sido enviado exitosamente<br>";
				echo "<script> window.location='../index.html'</script>";
			} 
			else
			{
				echo " Error en el envio de su correo, intentalo mas tarde<br>";
				echo "<script> window.location='../index.php'</script>";
			}
	}
}
?>