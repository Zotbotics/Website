<?php

// define variables and set to empty values
$name = $email = $subject = $message = $headers = "";
// $message = "Im not empty!!!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //get relevant data from POST header
  $name = $_POST["name"];
  $email = $_POST["email"];

  //set up email content
  $to = "zotbotics@gmail.com";
  $subject = "[CONTACT FORM] " . $_POST["subject"];
  $headers = "Reply-to: $email";
  $message = "Message from  $name ($email) \r\n";
  $message .= "Timestamp: ". gmdate("M d Y H:i:s", time());
  $message .= "\r\n\r\n";
  $message .= "MESSAGE BELOW\r\n";
  $message .= "=============================";
  $message .= "\r\n\r\n";
  $message .= $_POST["message"];

  $sent = mail($to, $subject, $message, $headers);
  if ($sent) {
    syslog(LOG_INFO, "Contact form received from " . $_POST["email"]);
    echo 'Message Sent!<br>';
    echo "Timestamp: ". gmdate("M d Y H:i:s", time());
  }
  else{
      syslog(LOG_WARN, "Error processing contact form from " . $_POST["email"]);
      echo 'Message NOT sent :(. If this problem recurrs, contact webmaster@zotbotics.org';
  }


}

else{
  syslog(LOG_NOTICE, "Contact form called without POST method?");
}


?>
