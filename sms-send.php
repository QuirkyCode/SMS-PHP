<?php

// xxxxxxxxxxx = The number you want to text
$to = "xxxxxxxxxxx@three.co.uk";

// Enter your email here or email for service or website for script
$from = "your@email.com";

// Put the text for the message you want to send here. Remember \n creates a new line
$message = "Hello There! This is a text message\nI'm a New line...";

// Header = $from variable
$headers = "From: $from\n";

// Sends the message SMS to $to variable including $headers
mail($to, '', $message, $headers);
?>
