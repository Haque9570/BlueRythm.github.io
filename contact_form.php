<?php
    $name = $_POST['name'];
    $visitor_emai = ['email'];
    $message = $_POST['message'];


    $email_form= 'mdmerajulhaqueghz@gmail.com';
    $email_subject = "New form submission";
    $emai_body = "User Name: $name.\n",
                    "User Email: $visitor_email.\n",
                        "User Message: $message.\n";
    
    $to = "mdmerajulhaqueghz@gmail.com";

    $headers = "From: $emai_from \r\n";

    mail($to,$email_subject,$emai_body,$headers);

    header("Location index.html")
?>