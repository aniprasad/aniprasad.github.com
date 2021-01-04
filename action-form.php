<?php

// First check if the server method is post
$post = $_SERVER["REQUEST_METHOD"];
$post = ($post == "POST");
die('post');
if($post) {
	$name = $_POST['text field name attribute in html'];
	$email = $_POST['text field email attribute in html'];
	$message = $_POST['text field content(content box) attribute in html'];
	// Add in other relevant fields based on html form layout
}
else {
	die('Please send form data through post');
}

// Hopefully all the required information has now been obtained

$sender_email = $email;
$receiver_email = "Enter Himanshu's email";

// For now simply appending the senders email onto the message content
// Use headers to improve this as this is ugly

$email_content = $sender_email . "</br>" . $message . "</br>"; 

// Simple mail implementation using php mailer function
// Simply emails the message box contents with a subject to an email

mail($receiver_email, 'Enter subject here', $email_content);

// Debugging information
// If you want to debug this to see if it sends the email or not
// In the action tag of the form attribute add a _blank so that
// it opens in a new tab. Add in appropriate die statements


?>