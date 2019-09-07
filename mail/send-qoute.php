<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'autoload.php';


    
    


$qoute_name=$_POST['name'];

$qoute_email=$_POST['email'];

$qoute_content=$_POST['message'];


                    
                    
                    
                    
                    
                    
                    
                    
                    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
//    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
//    $mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'stmp.gmail.com';  // Specify main and backup SMTP serversmail.talentsongo.org mail.talentsongo.org
//    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'iamstrdeveloper@gmail.com';                 // SMTP username m.abdisatar@talentsongo.org
//    $mail->Password = 'nadifa02';                           // SMTP password ZKLcEH%zE{0[
//    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = 587;// TCP port to connect to
//    
    
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.talentsongo.org';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'm.abdisatar@talentsongo.org';                 // SMTP username
    $mail->Password = 'ZKLcEH%zE{0[';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;// TCP port to connect to
    
    
    $mail->setFrom($qoute_email,$qoute_name);
    
    
    $mail->addAddress("iamsatarmovic@gmail.com");
$mail->addReplyTo($qoute_email, $qoute_name);
    
   
    //Recipients
   

    

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "qoutation";
    $mail->Body    = 
        
        
        
        
        
"<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Document</title>
</head>
<body>
<p> qoute email. $qoute_email.</p>
    <p>message .$qoute_content.</p>
    
    
</body>
</html>";
    $mail->AltBody = $qoute_content;

    $mail->send();
    json_encode(array('message'=>'sent successfully'));
} catch (Exception $e) {
//    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    header("location: ../index.html");
}
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
 






















?>

