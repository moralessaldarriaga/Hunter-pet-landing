<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/config.php';
require __DIR__ . '/vendor/autoload.php';


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

    // $phpmailer->SMTPDebug = 2;
    // $phpmailer->Debugoutput = 'html';

    $phpmailer->Host = SMTP_HOST;
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = SMTP_USER;
    $phpmailer->Password = SMTP_PASS;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->CharSet = 'UTF-8';

    // Remitente

    $phpmailer->setFrom(
        'atenciondigital@hunter.com.pe',
        'Hunter PET'
    );



    // Destino

    $phpmailer->addAddress(
        'atenciondigital@hunter.com.pe',
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
    "Nuevo registro en el formulario de Hunter Pet";



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
        "title" => "¡Tu mensaje ha sido enviado con éxito!",
        "message" => "Gracias por escribirnos, pronto un ejecutivo te contactará."
    ]);


    exit;



} catch(Exception $e){

    echo json_encode([
        "status" => "error",
        "title" => "¡Upsssss hubo un error!",
        "message" => "Tu mensaje no se pudo enviar. Por favor, inténtalo de nuevo más tarde."
    ]);

    // echo json_encode([
    //     "status" => "error",
    //     "title" => "Error SMTP",
    //     "message" => $phpmailer->ErrorInfo,
    //     "exception" => $e->getMessage()
    // ]);

    exit;

}

?>
