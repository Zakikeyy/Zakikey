<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailForm = $_POST['email'];
    $Subject = $_POST['subject'];
    $Message = $_POST['message'];

    $mailTo = "zakidewasiwa95@gmail.com";
    $headers = "From: ".$mailForm;
    $txt = "You have a message ".$name". \n\n".$Message

    mail($mailTo, $nam, $txt, $headers);

    header('Location: index.html?MessageSent"');
    
?>