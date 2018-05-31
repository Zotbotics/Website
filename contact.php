<?php
//get the message

$name = $_POST['Name']
$from = $_POST['Email']
$subject = $_POST['Subject']
$message = $_POST['Message']
$timestamp = date("Y-m-d H:i:s")

echo "I'm seeing a message from " . $name . " at " . $from;
echo  "\r\nSubj:" . $subject . "\r\n\r\n" . $message;
$headers = 'From: <test@test.com>' . "\r\n" .
'Reply-To: <test@test.com>';

$prepend = "Timestamp: " . $timestamp . "\r\n";
$prepend = $prepend . "From: " . $name . " <" . $email . ">\r\n";
$prepend = $prepend . "----------MESSAGE CONTENT----------";
$prepend = $prepend . "\r\n\r\n";

$message = $prepend . $message;

// mail('<zotbotics@gmail.com>', $subject, $message, $headers,
//  '-fwebmaster@zotbotics.org');
?>
