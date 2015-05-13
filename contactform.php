<?php
	
	if(empty($_POST["submit"]))
{
	echo "Form is not submitted!";
	exit;
}

if(empty($_POST["fullname"]) ||
	empty($_POST["email"]) || empty($_POST["email"]))
  {
  	echo "Please fill the form";
  	exit; 
  }

$name = $_POST["fullname"];
$email = $_POST["email"];
$message = $_POST["message"];

mail('tiffany@tthompson899.net', 'New form submission',"You have a New Message: 
	Name: $name, \n Email: $email, \n Message: $message");

header('Location: thanks.html');



?>