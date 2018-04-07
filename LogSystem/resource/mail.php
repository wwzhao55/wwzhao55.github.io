<?php

$to = "435951924@qq.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "wwzhaovip@163.com";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
//echo "Mail Sent.";

?>