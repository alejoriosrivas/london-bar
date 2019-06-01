<?php
    //Calling values
    $name = $_POST ['name'];
    $mail = $_POST ['mail'];
    $phone = $_POST ['phone'];
    $message = $_POST['message']
    
    //mail information
    $addressee = "corporaciones.tr@gmail.com";
    $affair = "contact from our web";

    $paper = "From: $name \n";
    $paper .= "Email: $mail \n";
    $paper .= "Phone: $phone \n";
    $paper .= "Message: $message \n";

    //Sending message
    mail($addressee, $affair, $paper);
    
>
