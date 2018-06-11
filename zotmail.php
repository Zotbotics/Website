<?php

ini_set('display_errors', 'On');

// define variables and set to empty values
$name = $email = $subject = $message = "";
// $message = "Im not empty!!!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $message = ($_POST["message"]);
}
echo print_r($_POST);
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//import PHPmail

use PHPMailer\PHPMailer\PHPMailer;
//require_once('phpmailer/PHPMailerAutoload.php');
use PHPMailer\PHPMailer\Exception;

//load Composer's autoloader
require 'vendor/autoload.php';

//create mail object
$mail = new PHPMailer(true); 

try { //we always try to not die
    //server settings
    $mail->SMTPDebug = 2;
//    $mail->isSMTP(true);
//    $mail->SMTPAuth = true;
  //  $mail->SMTPSecure = 'tls';
  //  $mail->Mailer = "smtp";
    $mail->Host = localhost; //"email-smtp.us-east-1.amazonaws.com";
    $mail->Port = 587;
   // $mail->Username = ""; //yes this is open, that's why we include from a space not open to the world
   // $mail->Password = "";
	
    //people involved 
    $mail->setFrom($email, $name); //put something useful here
    $mail->addAddress('azureuser@example.com', 'locatest');//'zotbotics@gmail.com', 'Zotbotics Website');     // who its sending to
	
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->AltBody = $message;
	
	//now send
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    print_r($_POST);
}

