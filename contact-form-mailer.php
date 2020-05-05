<?php
/* pulling values from form & storing as variables */
if($_POST) {
$name = ($_POST["name"]);
$email = ($_POST["email"]);
$phone = ($_POST["phone"]);
$comments = ($_POST["message"]);
$honeypot = $_POST['firstname'];
/* Declaring email contents */
$recipient = 'info@unisonengineering.ie'; // This is who receives the mail, i.e. change to sales team for production build
$subject = "Enquiry from {$name} - Website Contact Form";
$celciusChar = "\u{2103}";
$message =  "\r\n
            Name: {$name} \r\n
            Email: {$email} \r\n
            Phone Number: {$phone} \r\n
            Enquiry: {$comments}";
/* concatenating variables and strings for legibility */
$sender = "{$name} <{$email}>";
$headers = "From: {$sender}";
/* Security Variables */ 
$successMessage = "<header><?php include 'nav.html'; ?></header><div style='display:inline-block;font-family:sans-serif;line-height:1.2;max-width:1200px;margin:10vw;'><h1>Thank you for getting in touch</h1><p>We will deal with your enquiry as soon as possible. Expect a response within 2 working days.</p><a style='font-size:16pt;' href='../'>Return Home</a></div><footer><?php include './footer.html' ?></footer>";
$failureMessage ="<div style='display:inline-block;font-family:sans-serif;line-height:1.2;max-width:1200px;margin:10vw;'><h1>It's not you, it's us...</h1><p>We are afraid that something has went wrong on our end! You can still catch us on email at info@unisonengineering.ie</p><a href='../'>Return Home</a></div>";

if ( !empty($honeypot) ) {
    //mail failed
    echo $failureMessage;
    return;
    } else {
        //send mail
        mail($recipient, $subject, $message, $headers);
        echo $successMessage;
        }
}
?>