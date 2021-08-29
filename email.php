<?php

        ini_set( display_errors, 1 );

        error_reporting( E_ALL );
        $subject = 'Website Enquiry - Message received'; // Subject of your email
        $to = 'barkha.aagarwal@gmail.com,info@upstagesolutions.ca';  //Recipient's E-mail
        $emailTo = $_REQUEST['email'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg = $_POST['message'];

        $from ="info@geekin.ca";
        
        $message = 'Name : ' . $name . "\n";
        $message .= 'Email : ' . $email . "\n";
        $message .= 'Phone : ' . $phone . "\n";
        $message .= 'Message : ' . $msg;

        $headers = "From:" . $from;

        if(mail($to,$subject,$message, $headers)) {
            echo "sent";
        } else {
            echo "failed";
        }


?>
