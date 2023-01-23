<?php
        // use PHPMailer\PHPMailer\PHPMailer;
        // use PHPMailer\PHPMailer\Exception;
        
        // require 'phpmailer/Exception.php';
        // require 'phpmailer/PHPMailer.php';
        // require 'phpmailer/SMTP.php';

        // // Get the form fields and remove whitespace.
        // $name = strip_tags(trim($_POST["name"]));
        //     $name = str_replace(array("\r","\n"),array(" "," "),$name);

        // $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        // $phone = strip_tags(trim($_POST["phone"]));
        // $message = trim($_POST["message"]);

        // echo 'Mailer';
        // // Check that data was sent to the mailer.
        // if ( empty($name) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     // Set a 400 (bad request) response code and exit.
        //     http_response_code(400);
        //     echo "Please complete the form and try again.";
        //     exit;
        // }

        // try {
        //     //Server settings
        //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        //     $mail->isSMTP();                                            //Send using SMTP
        //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        //     $mail->Username   = 'fiaat.5elements@gmail.com';                     //SMTP username
        //     $mail->Password   = 'dqmuerufgytqifwx';                               //SMTP password
        //     $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        //     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        //     //Recipients
        //     $mail->setFrom('fiaat.5elements@gmail.com', 'Mailer');
        //     $mail->addAddress('fiaat.5elements@gmail.com', 'Joe User'); 
        
        //     $email_content = "Name: $name\n";
        // $email_content .= "Email: $email\n\n";
        // $email_content .= "Phone: $phone\n\n";
        // $email_content .= "Message:\n$message\n";

        //  // Set the email subject.
        //  $subject = "New contact from $name";
        //     //Attachments
        //     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
        //     //Content
        //     $mail->isHTML(true);                                  //Set email format to HTML
        //     $mail->Subject = subject;
        //     $mail->Body    = $email_content;
        
        //     $mail->send();
        //     http_response_code(200);
        //     echo "Name: $name\n";
        //     echo "Thank You! Your message has been sent.";

        // } catch (Exception $e) {
        //     http_response_code(403);
        //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // }


        //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
     // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
            $name = str_replace(array("\r","\n"),array(" "," "),$name);

        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = strip_tags(trim($_POST["phone"]));
        $message = trim($_POST["message"]);
        $selectedOption = trim($_POST["selected-time"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($phone) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Please complete the form and try again.";
            exit;
        }
        if($selectedOption==0){
             // Set a 400 (bad request) response code and exit.
             http_response_code(400);
             echo "Please Select Time to Contact ";
             exit;
        }

try {
      //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                       //Enable verbose debug output
//        $mail->SMTPDebug = 2;                             //Enable verbose debug output
//        $mail->isSMTP();                                             //Send using SMTP

$mail->Host         = "tls://smtp.gmail.com";
$mail->SMTPAuth     = true;
$mail->Username   = 'fiaat.5elements@gmail.com';                     //SMTP username
        $mail->Password   = 'dqmuerufgytqifwx';                               //SMTP password
$mail->SMTPSecure   = "tls";
$mail->Port         = 587;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    //Recipients
    $mail->setFrom('fiaat.5elements@gmail.com', 'Fiaat New Members');
    $mail->addAddress('fiaat.5elements@gmail.com');     //Add a recipient


         $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Phone: $phone\n\n";
        $email_content .= "Selected Course :\n$message\n";


        $email_content .= "Selected Course :\n$selectedOption\n";

         // Set the email subject.
         $subject = "New Member Applied for $message";
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $email_content;

    if($mail->send()){
        http_response_code(200);
            echo "Thank You!";
    }
    else{
        http_response_code(403);
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
       

?>
