<?php 

    $to = "dineshg5678@gmail.com"; // this is your Email address

    $name = $_POST['name']; // required
 
    $email_from = $_POST['email_From']; // required
 
    $contact_number = $_POST['contact_number']; // required
 
    $dob = $_POST['dob']; // not required
 
    $job_role = $_POST['job_role']; // required

    $job_category = $_POST['job_category'];

    $industry = $_POST['industry'];

    $location = $_POST['location'];

    // $from = $_POST['']; // this is the sender's Email address
    // $first_name = $_POST['first_name'];
    // $last_name = $_POST['last_name'];
    
    $subject = "Form submission";
    
    $subject2 = "Copy of your form submission";
    
    $message = $name . " " . " Contact Number:" . $contact_number . "\n\n" . "Date of Birth: " . $dob . "\n\n" . " Job_Role:" . $job_role . "\n\n" . $job_category . "\n\n";
    
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $message;

    $headers = "From:" . $email_from;
    $headers .= "Content-type: text/plain; charset=utf-8" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "X-Priority: 1" . "\r\n"; 
    $headers2 = "From:" . $to;
    $headers2 .= "Content-type: text/plain; ccharset=utf-8" . "\r\n";
    $headers2.= "X-Mailer: PHP/" . phpversion();
    $headers2 .= "X-Priority: 1" . "\r\n"; 

     if(mail($to,$subject,$message,$headers)){
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
     }
    else{
        echo "therse was a problem with sending";
        exit;
    }

    if(mail($email_from,$subject2,$message2,$headers2)){ // sends a copy of the message to the sender
    
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    
?>