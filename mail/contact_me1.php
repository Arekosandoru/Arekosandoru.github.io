<?php
// if(empty($_POST['name'])      ||
//    empty($_POST['phone'])     ||
//    {
//    echo "No arguments Provided!";
//    return false;
//    }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
   
$to = 'arekosandor@yandex.ru';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n";
$headers = "From: 1@мастерскаясвет.рф\n"; 
$headers .= "Reply-To: $phone,' ', $name";   
mail($to,$email_subject,$email_body,$headers);
// return true;         
?>
