<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'sathwikreddy0202@gmail.com';
  $mail->Password = 'nutyxhxdvnpesouq';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('sathwikreddy0202@gmail.com');

  $mail->addAddress($_POST["email"]);

  $mail->isHTML(true);

  $mail->Subject = $_POST["subject"];
  $mail->Body = $_POST["message"];

  $mail->send();

  echo
  "
  <script>
  alert('sent Successfully');
  document.location.href = 'index.php';
  </script>
  ";
}
?>