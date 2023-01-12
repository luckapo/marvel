<?php
if($_SERVER["REQUEST_METHOD"]!= "POST") {
	header("Location: index.html")
}
die();


$nombre = $_POST["nombre"];
$fechae = $_POST["fecha_entrada"];
$fechas = $_POST["fecha_salida"];
$email = $_POST["email"];
$comentario = $_POST["comentario"];

if(empy(trim($nombre)))$nombre = "anonimo";

$body = <<<HTML
 <h1> Contacto desde el sitio web de Mar del plata </h1>
 <p> $nombre / $email </p>
 <h2> Mensaje</h2>
 $comentario
HTML;
$headers =  "MIME-Version: 1.0 /r/n";
$headers.=  "Content-type: text/html; charset=utf-8 \r\n";
$hearders.="From: $nombre <$email> \r\n";
$headers.= "Bcc: montani@corber.com.ar \r\n";

//remitente

//asunto

//cuerpo
var_dump($nombre);
var_dump($fechae);
var_dump($fechas);
var_dump($email);
var_dump($comentario);

//enviar mail 
 $rta = mail("marve1.mdq@gmail.com", "departamento mar del plata", $body, $headers);

 var_dump($rta);
header("Location: gracias.html");






// mail de destino: cambiarlo por tu mail personal

// $enviaPara = 'montani@corber.com.ar'; 

// subject del mail: el asunto que quiero que muestre

// $subject = 'Contacto de mar del Plata'; 

/* ruta relativa desde ESTE documento al html que quiero que se abra después de mandar el mail. También se puede poner en target una caja que estuviera display none en el mismo html que contiene el form y que al enviar el mail y volver a ese mismo html, se ajuste display block al entrar en target (en vez de ponerla en target con un vínculo lo hacemos al volver desde el php luego de enviar el mail), por ejemplo, contacto.html#enviado */

// $enviado="index.html#gracias";




//DE ACÁ PARA ABAJO NO TOCAR...

// $mensaje = '';
// $primero = true;
// foreach($_POST as $indice => $valor){
// 	if(is_array($valor)){
// 		$mensaje .= '<strong>'.$indice.': </strong><ul>';
// 		foreach($valor as $item){
// 			$mensaje .= '<li>'.$item .'</li>';
// 		}				
// 		$mensaje .= '</ul><br>'; 
// 	}else{
// 		if($primero){
// 			$from = $valor;
// 			$primero = false;
// 		}
// 		$mensaje .= '<strong>'.$indice.': </strong>';
// 		$mensaje .= $valor . '<br>';
// 		if(strpos($valor, '@')>3 && strpos($valor, '.') > -1){
// 			$from = $valor;
// 		}
// 	}
// }
// $mail_headers  = "MIME-Version: 1.0\r\n";
// $mail_headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
// $mail_headers .= 'From: ' . $from . "\r\n";
// @mail($enviaPara, $subject, $mensaje, $mail_headers); 
// header("Location: $enviado");
?>