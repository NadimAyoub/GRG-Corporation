<?php 
if(isset($_POST['submit'])){
    $to = "flokisensei@gmail.com"; 
    $from = $_POST['email'];
    $first_name = $_POST['name'];
    $last_name = $_POST['surname'];
    $file = $_POST['myfile'];
    $subject = "Form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: index.html')
    }
?>