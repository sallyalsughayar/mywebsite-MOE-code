<?php
    $to = "sally_1s@outlock.com";
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];

    if(mail($to, $Name, $Email, $Message)){
        echo file_get_contents("ContactUs.html");
    }
    else{
        echo "ERROR!!!!!";
    }

?>