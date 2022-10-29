<?php

    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    $myEmail = "yucram@kean.edu";
    

    if(mail($myEmail, $subject, $message)){
        echo "<script>alert('Message Sent');</script>";
    }
    else {
        echo "<script>alert('Message not Sent');</script>";
    }
    
    echo "<script>window.loaction.href='Index.html';</script>";

?>

