<?php
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$telephone = trim($_POST['telephone']);
	$bussines_name = trim($_POST['bussines_name']);
	$ruc = trim($_POST['ruc']);
	$bussines = trim($_POST['bussines']);
	$space = $_POST['space'];
	$key_domain = trim($_POST['key_domain']);
	$warranty = trim($_POST['warranty']);
	$advance = trim($_POST['advance']);
	$percentage = trim($_POST['percentage']);
	$message = trim($_POST['message']);
    $sumatotal = trim($_POST['sumatotal']);

    $emailTo = 'mauricio@cuscosquare.com';
	$subject = '[RENTA] Nuevo Mensaje Cusco Square.';
	$body = '' .
		'Nombre: ' . $name . "<br/>" .
		'Email: ' . $email . "<br/>" .
		'Teléfono: ' . $telephone . "<br/>" .
		'Razon Social: ' . $bussines_name . "<br/>" .
		'RUC: ' . $ruc . "<br/>" .
		'Pedito Total: ' . $sumatotal . "<br/>" .
		'Giro: ' . $bussines . "<br/>".
		'Espacios: ';

	for ($i=0; $i<count($space); $i++) {
    	$body .= $space[$i] . ', ';
	}

	$body .= "\n" .
		'Dominio de llave: ' . $key_domain . ' meses' . "<br/>" .
		'Garantía: ' . $warranty . ' meses' . "<br/>" .
		'Adelanto: ' . $advance . ' meses' . "<br/>" .
		'Porcentaje: ' . $percentage . "<br/>" .
		'Mensaje: ' . $message . "<br/>";

	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n".
		'Content-Type:text/html;charset=utf-8'."\r\n";

	mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo ('SEND');
?>
