<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("mydba", $connection); // Selecting Database
//Fetching Values from URL
$userName=$_POST['name1'];
$email_from=$_POST['email1'];
$password2=$_POST['password1'];
$contact2=$_POST['contact1'];
$message = 'Hello! testing';

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
			
//Insert query
//$query = mysql_query("insert into form_element(name, email, password, contact) //values ('$name2', '$email2', '$password2','$contact2')");
//echo "Form Submitted Succesfully";
//mysql_close($connection); // Connection Closed
?>