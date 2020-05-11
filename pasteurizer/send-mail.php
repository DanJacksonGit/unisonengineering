<?php
/* pulling values from form & storing as variables */
if ($_POST) {
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $phone = ($_POST["phone"]);
    $company = ($_POST["company"]);
    $country = ($_POST["country"]);
    $product = ($_POST["product"]);
    $flowRate = ($_POST["flowRate"]);
    $temp = $_POST['temp'];
    $inlet = $_POST['inlet']; // not required
    $outlet = $_POST['outlet']; // not required
    $holdingTime = ($_POST["holdingTime"]);
    /* PATCH  23 FEB 2020- Three Phase question returns 1, not 'yes' or 'no' */
    $threePhase = ($_POST["threePhase"]);
    /* END PATCH 23 FEB 2020 */
    $comments = ($_POST["message"]);
    $honeypot = $_POST['firstname'];
    /* Declaring email contents */
    $recipient = 'info@unisonengineering.ie'; // This is who receives the mail, i.e. change to sales team for production build
    $subject = "{$flowRate} Litre/hr {$product} Pasteurizer Enquiry";
    $celciusChar = "\u{2103}";
    $message =  "\r\n
            Name: {$name} \r\n
            Email: {$email} \r\n
            Phone Number: {$phone} \r\n
            Company Name: {$company} \r\n
            Country: {$country} \r\n 
            Product: {$product} \r\n 
            Flow Rate: {$flowRate}L/hr \r\n 
            Pasteurising Temp: {$temp}{$celciusChar} \r\n
            Inlet: {$inlet}{$celciusChar} \r\n 
            Outlet: {$outlet}{$celciusChar} \r\n 
            Holding Time: {$holdingTime} seconds\r\n 
            Three Phase Electricity Available: {$threePhase} \r\n 
            Additional Comments: {$comments}";
    /* concatenating variables and strings for legibility */
    $sender = "{$name} <{$email}>";
    $headers = "From: {$sender}";
    /* Security Variables */
    $successMessage = "<div style='display:inline-block;font-family:sans-serif;line-height:1.2;max-width:1200px;margin:10vw;'><h1>Congrats!</h1><p>You are one step closer to saving costs and speeding up your process with a Unison HTST Pasteurizer</p><a style='font-size:16pt;' href='../'>Return Home</a></div>";
    $failureMessage = "<div style='display:inline-block;font-family:sans-serif;line-height:1.2;max-width:1200px;margin:10vw;'><h1>It's not you, it's us...</h1><p>We are afraid that something has went wrong on our end! Not to worry, we are working on getting it fixed! You can still catch us on email at info@unisonengineering.ie</p><a href='../'>Return Home</a></div>";

    if (!empty($honeypot)) {
        //mail failed
        echo $failureMessage;
        return;
    } else {
        //send mail
        mail($recipient, $subject, $message, $headers);
        echo $successMessage;
    }
}
