<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'MixingMemories4u Contact Form';
  $email_subject = "Subject: $subject"
  $email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Message: $message";
  $to = "warren@katapultmedia.com";
  $headers = "From: $email_from \r\n";
  $headers .="Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  header("Access-Control-Allow-Origin: *");
  header("location: index.html");
 ?>
