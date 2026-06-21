<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';



$type = $_POST['type'];
$document = $_POST['document'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$message = $_POST['message'];




$phpmailer = new PHPMailer(true);



try {


    // SMTP

    $phpmailer->isSMTP();


    $phpmailer->Host = 'smtp.gmail.com';


    $phpmailer->SMTPAuth = true;


    $phpmailer->Username = 'tu-correo@gmail.com';


    $phpmailer->Password = 'PASSWORD_DE_APLICACION';


    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;


    $phpmailer->Port = 587;



    // Remitente

    $phpmailer->setFrom(
        'tu-correo@gmail.com',
        'Landing Web'
    );



    // Destino

    $phpmailer->addAddress(
        'correo-recibe@gmail.com',
        'Ventas'
    );



    // Responder al usuario

    $phpmailer->addReplyTo(
        $mail,
        $name
    );



    // HTML

    $phpmailer->isHTML(true);



    $phpmailer->Subject =
    "Nueva solicitud desde Landing";



    $phpmailer->Body = "

    <h2>Nueva solicitud</h2>


    <p>
    <strong>Tipo documento:</strong>
    $type
    </p>


    <p>
    <strong>Documento:</strong>
    $document
    </p>


    <p>
    <strong>Celular:</strong>
    $phone
    </p>


    <p>
    <strong>Nombre:</strong>
    $name $lastname
    </p>


    <p>
    <strong>Correo:</strong>
    $mail
    </p>


    <p>
    <strong>Mensaje:</strong>
    $message
    </p>

    ";



    $phpmailer->send();



    header(
        "Location: gracias.php"
    );


    exit;



} catch(Exception $e){


    echo "Error enviando correo: "
    . $phpmailer->ErrorInfo;


}

?>
