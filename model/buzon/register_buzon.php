<?php
	include('../../controller/buzon/funciones_buzon.php');
	//var_dump($_POST);

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$domicilio = $_POST['domicilio'];
	$telefono = $_POST['telefono'];
	$email_institucional = 'eleazar.cortez@jesusmaria.gob.mx';
	$idtipoasunto = $_POST['idtipoasunto'];
	$descripcion = $_POST['descripcion'];
    $contenido = "Se recibío desde el portal institucional el siguiente formulario de contacto: \n \n Nombre: ".$nombre."\n \n Correo electrónico: ".$email."\n \n Teléfono: ".$telefono."\n \n Descripción: ".$descripcion;
	if(register_buzon($nombre, $email, $idtipoasunto, $descripcion, $domicilio, $telefono))
	{
		ini_set( 'display_errors', 1 );
		error_reporting( E_ALL );
		$from = "buzon@jesusmaria.gob.mx";
		$to = $email_institucional;
		$subject = "Buzón de Sugerencias del Municipio de Jesús María";
		$message = utf8_decode($contenido);
		$headers = "From:" . $from;
		mail($to,mb_encode_mimeheader($subject),$message, $headers);
		//echo "The email message was sent.";
			
		echo "correcto";
	}
	else
	{
		echo "error";
	}
?>