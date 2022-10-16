<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'dbcon.php';

if(isset($_POST['submit'])) {
    
  $eml = $_POST["email"];
  $passw = $_POST["password"];
  $hash= sha1($passw);
  $random = random_int(100000, 999999);

  $mail = new PHPMailer(true);
  $mail->isSMTP();                                      
  $mail->Host       = 'smtp.gmail.com';                 
  $mail->SMTPAuth   = true;                                  
  $mail->Username   = 'developer.workflow@gmail.com';                     
  $mail->Password   = 'cekppuozjncpwwlx';                              
  $mail->SMTPSecure = 'ssl';            
  $mail->Port       = 465;
  $mail->setFrom('developer.workflow@gmail.com', 'WorkFlow');
  $mail->addAddress("$eml");
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'WF | Email Varification';
  $mail->Body    = "$random";
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  if($mail->send()){
    $_SESSION['hash']=$hash;
    $_SESSION['otp']= $random;
    $_SESSION['eml']= $eml;
  
    header("location: /mp/otp/otp.php");
    

  }else{
    echo '<script> alert("Some error occured"); </script>';
  }

  // echo "lev1";
  // echo $eml;
  // echo $passw;
  // echo $hash;
  
  //$sql2="INSERT INTO `tbl_login`(`log_email`, `log_pass`) VALUES ('[value-1]','[value-2]')";
  // $result=mysqli_query($conn, $sql2);
  // $res=mysqli_fetch_array($result);
  // echo "lev2";
  // echo $res['log_id'];
  // echo $res['log_pass'];
  // echo $res['log_email'];
} 
?>