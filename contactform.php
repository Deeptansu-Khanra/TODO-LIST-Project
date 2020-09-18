<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='deeptansu.khanra@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo '<script>alert("Thanks for Signing up! We will contact you shortly.")</script>'; 
		}
		else{
			echo '<script>alert("Sorry! Something went wrong.")</script>'; 
		}
	}
?>