<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $mailsubject = $_POST['subject'];
    $mailmessage = $_POST['message'];

    $to = "rahimathila@gmail.com"; 
    $subject = "Message from personal website";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nMail Subject: $mailsubject\nContent: $mailmessage\n";
    mail($to, $subject, $message);
    echo "Email sent successfully!";

    header("Location: index.html");

    exit();
}
?>
