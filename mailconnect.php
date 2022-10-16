<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
// include "dbcon.php";

// $mail = new PHPMailer(true);
// //Server settings
//        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//        $mail->isSMTP();                                            //Send using SMTP
//        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//        $mail->Username   = 'developer.workflow@gmail.com';                     //SMTP username
//        $mail->Password   = 'cekppuozjncpwwlx';                               //SMTP password
//        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
//        $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//        $una="allensphilip@gmail.com";

//        //Recipients
//        $mail->setFrom('developer.workflow@gmail.com', 'WorkFlow');
//        $mail->addAddress("$una");     //Add a recipient
//       //
   
//        //Attachments
//       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//       // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
   
//        //Content
//        $mail->isHTML(true);                                  //Set email format to HTML
//        $mail->Subject = 'Hi This is admin';
//        $mail->Body    = "hihi";
//        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
//        $mail->send();

    //        $mail = new PHPMailer(true);
    //        $mail->isSMTP();                                      
    //        $mail->Host       = 'smtp.gmail.com';                 
    //        $mail->SMTPAuth   = true;                                  
    //        $mail->Username   = 'developer.workflow@gmail.com';                     
    //        $mail->Password   = 'cekppuozjncpwwlx';                              
    //        $mail->SMTPSecure = 'ssl';            
    //        $mail->Port       = 465;
    //        $mail->setFrom('developer.workflow@gmail.com', 'WorkFlow');
    //        $mail->addAddress("");
    //        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
    //        $mail->isHTML(true);                                  //Set email format to HTML
    //        $mail->Subject = 'Hi This is admin';
    //        $mail->Body    = "hihi";
    //       //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //        $mail->send();
?>


