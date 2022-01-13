<?php
   $to_email = "t030626@gmail.com";
   $subject = "Simple Email Test via PHP";
   $body = "Hi,\n This is test email send by PHP Script";
   $headers = "From: t030626@gmail.com";

   if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
   } else {
      echo("Email sending failed...");
   }
?>