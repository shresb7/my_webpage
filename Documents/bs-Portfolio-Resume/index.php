<?php>
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'From: BarshaWebsite';
	$to = 'shrestha.barsha17@gmail.com';
	$subject = 'Hi';
	
	$body = "From: $name\n Email: $email\n Message:\n $message";
	
	if ($_POST['submit']) {				 
		if (mail ($to, $subject, $body, $from)) { 
			echo '<p>Your message has been sent!</p>';
		} else { 
			echo '<p>Something went wrong, go back and try again!</p>'; 
		} 
    } else if ($_POST['submit']) {
		echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>