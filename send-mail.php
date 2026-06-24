<?php

header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';



$type = $_POST['type'] ?? '';
$document = $_POST['document'] ?? '';
$phone = $_POST['phone'] ?? '';
$name = $_POST['name'] ?? '';
$lastname = $_POST['lastname'] ?? '';
$mail = $_POST['mail'] ?? '';
$message = $_POST['message'] ?? '';




$phpmailer = new PHPMailer(true);



try {


    // SMTP

    $phpmailer->isSMTP();


    $phpmailer->Host = 'smtp.gmail.com';


    $phpmailer->SMTPAuth = true;


    $phpmailer->Username = 'morales.saldarriaga@gmail.com';


    $phpmailer->Password = 'eusjvolirvwbsxhg ';


    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;


    $phpmailer->Port = 587;



    // Remitente

    $phpmailer->setFrom(
        'tu-correo@gmail.com',
        'Hunter PET WEB'
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
    "Nueva solicitud de contacto desde WEB";



    $phpmailer->Body = "

    <h2>Datos del contacto</h2>


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


    echo json_encode([
        "status" => "success",
        "title" => "¡Todo listo! Tu mensaje se envió con éxito",
        "message" => "Gracias por ponerte en contacto. Ya recibimos tu información y te responderemos más rápido de lo que imaginas."
    ]);


    exit;



} catch(Exception $e){

    echo json_encode([
        "status" => "error",
        "title" => "¡Upsssss hubo un error!",
        "message" => "Tu mensaje no se pudo enviar. Por favor, inténtalo de nuevo más tarde."
    ]);

    exit;

}

?>
