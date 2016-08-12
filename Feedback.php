<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback</title>
</head>

<body>
<?php
	$myemail = 'kieranstack@hotmail.co.uk';
	$message = $_POST['message']; 
	
	$to = $myemail;
	$email_subject = 'Feedback';
	
    mail($to, $email_subject, $message);
	
	echo $message;
	echo $myemail;
?>
<p> Thank you for your feedback. Press back to return to the results page.
</body>
</html>