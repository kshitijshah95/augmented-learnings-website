<html>
<body>
<?php
	$name = $_POST['name1'];
	$email = $_POST['email1'];
	$phone = $_POST['phone1'];
	$desig = $_POST['desig1'];
	$org = $_POST['org1'];
	$msg = $_POST['msg1'];

	$to = "kshitijshah95@outlook.com";
	$subject = "Requesting Workshop";
	$msg = "From: $email\n".
		"Phone: $phone\n".
		"Sir,\n".
		"$msg".
		"Regards\n".
		"$name\n".
		"$desig\n".
		"$org1";
	$check=mail($to, $subject,$msg);

	if($check==1)
	{
		echo '<script>alert("Thank you for the Feedback");</script>';
	}
	else
	{
		echo '<script>alert("The feedback could not be sent. Please try again.");</script>';	
	}
	?>
</body>
</html>
