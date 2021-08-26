<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//htmlspecialchars
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);
//urldecode
$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);
//trim
$name = trim($name);
$email = trim($email);
//echo $name;
//echo "<br>";
//echo $email;
if (mail("saldanroman@gmail.com", "TEST", "Name:".$name.". E-mail: ".$email , "From: test@gmail.com \r\n"))
 {     echo "Message send";
} else {
    echo "Error";
}?>