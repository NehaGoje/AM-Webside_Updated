<?php
if(isset( $_POST['fullname']))
$name = $_POST['fullname'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['comments']))
$message = $_POST['comments'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if ($name === ''){
echo "Name cannot be empty.";
die();
}
if ($email === ''){
echo "Email cannot be empty.";
die();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Email format invalid.";
die();
}
}
if ($phone === ''){
echo "Phone cannot be empty.";
die();
}
if ($message === ''){
echo "Comments cannot be empty.";
die();
}
$content="From: $name \nEmail: $email \nPhone: $phone \nMessage: $message";
$recipient = "aashish.malve@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>