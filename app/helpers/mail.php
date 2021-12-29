<?php
        # code...

        // ini_set( 'display_errors', 1 );
        // error_reporting( E_ALL );

        // $to         = "masapin68@gmail.com";
        // $from       = $_POST['email']; // this is the sender's Email address
        // $name       = $_POST['name'];
        // $notlp      = $_POST['handphone'];
        // $address    = $_POST['address'];
        // $subject    = "Form submission";
        // $subject2   = "Copy of your form submission";
        // $message    = $name . " " . $notlp . " wrote the following:" . "\n\n" . $_POST['messages'];
        // $message2   = "Here is a copy of your message " . $name . "\n\n" . $_POST['messages'];
    
        // $headers    = "From:" . $from;
        // $headers2   = "From:" . $to;
        // mail($to, $subject, $message,$headers);
        // mail($from,$subject2, $message2,$headers2);

    $name = $_POST['name'];
    $address = $_POST['address'];
    $messages = $_POST['messages'];


    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    // Call function
    require('PHPMAILER/Exception.php');
    require('PHPMAILER/SMTP.php');
    require('PHPMAILER/PHPMailer.php');
    
    //Create an instance; passing `true` enables exceptions
    
    try {
        //Server settings
        $phpmailer = new PHPMailer();
        // $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'a880d2e7496976';
        $phpmailer->Password = 'c62563e84c6f63';             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $phpmailer->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    
        //Recipients
        $phpmailer->setFrom('from@example.com', 'Mailer');
        $phpmailer->addAddress('joe@example.net', 'Joe User');     //Add a recipient
  
        //Content
        $phpmailer->isHTML(true);                                  //Set ephpmailer format to HTML
        $phpmailer->Subject = 'Complaint';
        $phpmailer->Body    = 'Messages from : '.$name.", <br> Messages: ".$messages;
        $phpmailer->AltBody = $address;
    
        $phpmailer->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
    }
    


    // header('Location: ../contact.php');

?>