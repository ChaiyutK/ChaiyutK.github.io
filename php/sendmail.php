<?php
    $name = $_POST['name'];
    $mesg = $_POST['mesg'];
    $email = $_POST['email'];
    $to = "benzchaiyut.k@gmail.com";
    $subject = $name;
    $txt = "Test";
    $headers = "From:". $email;
    
    if(mail($to,$subject,$txt,$headers);)
    {
        echo "<script>alert('thank you!');window.open('../index.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('ไม่สามารถส่งอีเมล์ได้ในขณะนี้โปรดติดต่อผู้ดูแลระบบ');window.open('../index.php','_self')</script>";
    }
    
?>