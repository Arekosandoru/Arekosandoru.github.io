<?php
if(isset($_POST['email'])) {
     
    $email_to = "arekosandoru@yandex.ru";
     
    $email_subject = "Website Contact Form";
     
     
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['input-email']) ||
        !isset($_POST['input-number']) ||
        !isset($_POST['input-message'])) ||
        !isset($_POST['input-budget']) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $name = $_POST['input-name']; // required
    $email_from = $_POST['input-email']; // required
    $telephone = $_POST['input-number']; // not required
    $inmessage = $_POST['input-message'];
    $inbudget = $_POST['input-budget'];  
 
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($inmessage)."\n";
    $email_message .= "Last Name: ".clean_string($inbudget)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
die();
?>