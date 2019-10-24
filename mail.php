<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
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
if ($subject === ''){
echo "Subject cannot be empty.";
die();
}
if ($message === ''){
echo "Message cannot be empty.";
die();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "alfreddocaballero@gmail.com";
$headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
mail($recipient, $subject, $content, $headers) or die("Error!");
echo "Email sent!";
?>
