<?php
require 'router.php';
require __DIR__.'/vendor/PHPMailer/src/PHPMailer.php';
require __DIR__.'/vendor/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
// var_dump($_POST);die(0);
$route = $_SERVER['REQUEST_URI'];

if ($route === "/contact" && !empty($_POST)) {
    
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    // Email info
    $to = "info@studiopulpe.com";
    $from = "filrouss@gmail.com";
    $password = "bioubiou23";
    $subject = "Contact - " . $prenom . " " . $nom;
    $emailMessage = "Message de la page contact: <br/><br/>
    Nom: {$prenom} {$nom}<br/>
    Courriel: {$email}<br/>
    Telephone: {$telephone}<br/>
    Message: <br/>{$message}";

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    $mail->Password = $password;
    $mail->SetFrom($from);
    $mail->addAddress($to, "Info");
    $mail->Subject = $subject;
    $mail->msgHTML($emailMessage);    

    if (!$mail->send())
    {
        $route = "/error";
    }
    else
    {
        $route = "/merci";
    }
    
}

$file = "./views/".dispatch($route);

require $file;