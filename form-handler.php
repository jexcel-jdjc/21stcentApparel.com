<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$order = $_POST['order'];
$message = $_POST['message'];

$email_from = '';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
				"User Name: $visitor_email.\n".
					"User Name: $order.\n".
						"User Name: $message.\n";

$to = 'jexcelcagatin@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-TO: $visitor_email\r\n";

mail($to,$email_order,$email_body,$headers);

header("Location: contact.html");

?>