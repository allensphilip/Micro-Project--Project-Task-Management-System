<?php
// //the message
// $msg = "First line of text\nSecond line of text";

// //use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// //send email
// mail("asptvr@gmail.com","My subject",$msg);

// Multiple recipients
$to_email = "allensphilip@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: allensphili2023a@mca.ajce.in";

if ( mail($to_email, $subject, $body, $headers) ) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>