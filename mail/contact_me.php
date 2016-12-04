<?php   
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$inmessage = $_POST['inmessage'];
$inbudget = $_POST['inbudget'];  

$to = 'arekosandoru@yandex.ru';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\n
	Name: $name
	\n\n
	Phone: $phone 
	\n\n 
	Email: $email 
	\n\n
	Message: $inmessage
	\n\n
	Budget: $inbudget
	\n\n";
$headers = "From: areko@github.ru\n"; 
$headers .= "Reply-To: $phone , $name , $email ";   
mail($to,$email_subject,$email_body,$headers);
// return true;         
?>
