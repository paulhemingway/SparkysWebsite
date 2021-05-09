<?php

# used this tutorial to do this.
# https://www.youtube.com/watch?v=U13smZvdArI

    require_once('PHPMailer-5.2-stable/PHPMailerAutoload.php');

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];     
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        $mailTo = "sparkystest@gmail.com";
        
        // since this email method requires the password of the account, I just include the user's email in the message.
        $txt = "You received an email from " . $name . " at " . $mailFrom . ".<br><br>" . $message;
        
        $mail = new PHPMailer(); 
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'sparkyssender@gmail.com';
        $mail->Password = 'sparkyssender2830';
        $mail->SetFrom($mailFrom);
        $mail->Subject = $subject;
        $mail->Body = $txt;
        $mail->AddAddress($mailTo);
            
        $mail->Send();     
        
        $success = "Email successfully sent! We will get back to you as soon as we can!";
        require "contact.php";
        exit;
    }

// sender email: sparkyssender@gmail.com
// password: sparkyssender2830

// receiver email: sparkystest@gmail.com
// password: sparkystest@gmail.com

?>