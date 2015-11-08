<?php
	
	/* Template Name: Contact Us Process Template */

	echo $_POST['form_name'];
	// $name = $_POST['name'];
	$to = get_option('admin_email');
	$subject = $_POST['form_name']." - ".$_POST['form_subject'];
	$message = $_POST['form_message'];
	$headers = "From: ".$_POST['form_email']."";
	$attachments = "";	

	$sent_message = wp_mail( $to, $subject, $message, $headers, $attachments );


	

	// if ( $sent_message ) {
 //    // the message was sent...
	//     echo 'The test message was sent. Check your email inbox.';
	// } else {
	//     // the message was not sent...
	//     echo 'The message was not sent!';
	// }

?>