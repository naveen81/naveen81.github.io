<?php



$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
if(!empty($action)){
	switch($action){
		case 'mail' : 

			$name = isset($_REQUEST['name']) ? $_REQUEST['name'] :'';
			$email = isset($_REQUEST['email']) ? $_REQUEST['email'] :'';
			$message = isset($_REQUEST['message']) ? $_REQUEST['message'] :'';
			
	
			if(!empty($name) && !empty($email) && !empty($message)){
				
			// Create the email and send the message
			$to = 'naveengupta718@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
			$email_subject = "Website Contact Form:  $name";
			$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
			$headers = "From: noreply@naveen81.github.io\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
			$headers .= "Reply-To: $email_address";	
			mail($to,$email_subject,$email_body,$headers);
			// return true;
			header("location:index.html?m=1");
			}

	}
}

?>