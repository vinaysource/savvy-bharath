<?php
ob_start();

if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form!";
}
 if(!isset($_POST['name']) ||
        !isset($_POST['email_From']) || 
        !isset($_POST['contact_number']) ||
        !isset($_POST['dob']) ||
        !isset($_POST['job_role']) ||
        !isset($_POST['job_category']) ||
        !isset($_POST['industry']) ||
        !isset($_POST['location'])) {
 
        echo "Please Go back to our and fillout correctly!";   
 
    }
	$name = $_POST['name']; // required
 
    $email_from = $_POST['email_From']; // required
 
    $contact_number = $_POST['contact_number']; // required
 
    $dob = $_POST['dob']; // not required
 
    $job_role = $_POST['job_role']; // required

    $job_category = $_POST['job_category'];

    $industry = $_POST['industry'];

    $location = $_POST['location'];
 
    $email_subject = 'New Mail From: ';

    $email_message = "Form details below: \r\n";
 
    $email_message .= "First Name: ". $name . "\n";
 
    $email_message .= "Email Address: ". $email_from . "\n";
 
    $email_message .= "Phone number: ". $contact_number . "\n";
 
    $email_message .= "Date of Birth: ". $dob . "\n";
 
    $email_message .= "Job-Role: ". $job_role . "\n";
    
    $email_message .= "Job-Category: ". $job_category . "\n";

    $email_message .= "industry: ". $industry . "\n";

    $email_message .= "location: ". $location . "\n";
     
     $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;
     $subject2 = "Copy of your form submission";


$to = "savvybharath@gmail.com";
$headers = "From: " . $email_from;
$headers2 = "From: " . $to;
if(mail($to, $email_subject,$email_message,$headers)){
    echo '<script type="text/javascript">alert("Thank you!' . $name . ', we will contact you shortly");</script>';
    
}else{
    echo '<script type="text/javascript">alert("Sorry! Unable to Send Email ' . $to . ' try again");</script>';
}
mail($email_from,$subject2,$message2,$headers2)// sends a copy of the message to the sender
    
?>