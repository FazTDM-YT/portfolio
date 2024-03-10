<?php

$name = _$_POST['name'];
$email = _$_POST['email'];
$message = _$_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "faizan.ak.2022@gmail.com";

mail($recipient, "Message Sent from Portfolio Website", $message, $mailheader) or die("Error!");

?>