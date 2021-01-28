<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "misagrf@yahoo.com";
    $header = "From ".$email."<br>";
    $message2 = "You have received a message from ".$name.".\n\n".$message;

    // 1. e-mail 
    // 1. subject
    // 3. message
    mail($myMail, $subject, $message2, $header);
    header("Location: index.php?mailsend");
}
?>