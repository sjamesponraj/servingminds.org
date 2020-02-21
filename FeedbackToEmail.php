<?php

	if( $_POST ){
		
			//Get values from form
			$userName = $_POST['userName'];
			$email_from = $_POST['userEmail'];
			$message = $_POST['message'];
						
			//Compose email message
			$host_email = "servingmindstrust@gmail.com";
			$email_subject = "Feedback from $userName. ";
			$email_To = "jacklinejeba@gmail.com";
			
			$email_body = "$message";
								
			$headers = "From: $email_from \r\n";
			// $headers = "From: " . strip_tags($_POST['userEmail']) . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			
			// In the format : mail($to,$email_subject,$email_body,$headers);
			mail($email_To, $email_subject, $email_body, $headers);
			
			echo "Form submitted successful";
		}
?>
		
	
	
