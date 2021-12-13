<?php
    $name = $_POST['name'];
    $mesg = $_POST['mesg'];
    $email = $_POST['email'];
    $to = "benzchaiyut.k@gmail.com";
    $subject = $name;
    $txt = "Test";
    $headers = "From:". $email;
    
    mail($to,$subject,$txt,$headers);
    
?>