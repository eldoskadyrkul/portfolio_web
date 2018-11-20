<?php

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($_POST['name']);
    $emailFrom = mysqli_real_escape_string($_POST['email']);
    $message = mysqli_real_escape_string($_POST['message']);
    
    $mailTo = "eldoskadyrkul.95@gmail.com";
    $headers = "From: " .$emailFrom;
    $text = "You have received an email from" .$name. ".\n\n".$message;
    
    mail($mailTo, $headers, $text);
    header("Location: index.php?emailsend");
}

?>