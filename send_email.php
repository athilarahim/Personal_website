<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "rahimathila@gmail.com"; 
    //$subject = "Message from personal website";
    $headers = "From: $email" . "\r\n";

    mail($to, $subject, $message, $headers);
    echo "Email sent successfully!";
}
?>
