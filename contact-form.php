<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['Email'];
$email_subject=$_REQUEST['messagesub'];
$message=$_REQUEST['message'];

if(empty($name)|| empty($email)|| empty($email_subject)|| empty($message)){

echo "Please fill in all the fields in order for message to be sent.";

}

else{

    mail("georgegarx31@gmail.com","Message from Site",$message,"From: $name <$email>");
    echo "<script type='text/javascript'> alert('Your message has been successfully sent!');
    window.history.log(-1);
    </script>";
}
