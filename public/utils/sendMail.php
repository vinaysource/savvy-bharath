<?php
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    // if(!isset($_POST['name']) ||
    //     !isset($_POST['email_From']) || 
    //     !isset($_POST['contact_number']) ||
    //     !isset($_POST['dob']) ||
    //     !isset($_POST['job_role']) ||
    //     !isset($_POST['job_category']) ||
    //     !isset($_POST['industry']) ||
    //     !isset($_POST['location'])) {
 
    //     died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    // }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email_from']; // required
 
    $contact_number = $_POST['contact_number']; // required
 
    $dob = $_POST['dob']; // not required
 
    $job_role = $_POST['job_role']; // required

    $job_category = $_POST['job_category'];

    $industry = $_POST['industry'];

    $location = $_POST['location'];
 
    $email_subject = 'New Mail From: ';
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  // if(!preg_match($email_exp,$email_from)) {
 
  //   $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  // }
 
  //   $string_exp = "/^[A-Za-z .'-]+$/";
 
  // if(!preg_match($string_exp,$first_name)) {
 
  //   $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  // }
 
  // if(!preg_match($string_exp,$last_name)) {
 
  //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  // }
 
  // if(strlen($comments) < 2) {
 
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  // }
 
  // if(strlen($error_message) > 0) {
 
  //   died($error_message);
 
  // }
 
    $email_message = "Form details below.\n\n";
 
     $email_to = "gandra.dineshreddy@gmail.com";
 
    // function clean_string($string) {
 
    //   $bad = array("content-type","bcc:","to:","cc:","href");
 
    //   return str_replace($bad,"",$string);
 
    // }
 
     
 
    $email_message .= "First Name: ".$name. "\n";
 
    $email_message .= "Email Address: ".$email_from. "\n";
 
    $email_message .= "Phone number: ".$contact_number. "\n";
 
    $email_message .= "Date of Birth: ".$dob. "\n";
 
    $email_message .= "Job-Role: ".$job_role. "\n";
    
    $email_message .= "Job-Category: ".$job_category. "\n";

    $email_message .= "industry: ".$industry. "\n";

    $email_message .= "location: ".$location. "\n";
     
 
     
 
// create email headers
 
// $headers = 'From: '.$email_from."\r\n".
 
// 'Reply-To: '.$email_from."\r\n" .
 
// 'X-Mailer: PHP/' . phpversion();
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ". $email_from. "\r\n";
$headers .= "Reply-To: ". $email_from. "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "X-Priority: 1" . "\r\n"; 
mail($email_to, $email_subject, $email_message, $headers);  
 echo "success";

 
?>
