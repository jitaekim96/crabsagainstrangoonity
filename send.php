<?php

$name = $_POST['name'];
$request = $_POST['request'];

$to = "crabrangoonity@yahoo.com";
$subject = "New Suggestion";
$body ="this is automated message. \n\n $request";

mail ($to,$subject,$body);

echo "message sent! <a href='index.html'>click here</a> to send another";

?> 