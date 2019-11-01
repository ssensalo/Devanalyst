<?php
	include 'db.php';
	include 'config.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$sql = "INSERT INTO users( `username`, `email`) 
	VALUES ('$name','$email')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}

//DevAnalyst confirmation email upon successful registration of a client
       $email2 = "DevAnalyst";//DevAnalyst's Email
       $subject = "Subscription to DevAnalyst";
       $message = "Your details have been received successfuly ! Thank you for subscribing to DevAnalyst";
       $headers = 'From:'. $email2 . "rn"; // DevAnalyst's Email
       $headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to DevAnalyst
// Message lines should not exceed 70 characters (PHP rule), so wrap it
       $message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
       mail($email, $subject, $message, $headers);
	mysqli_close($conn);
?>
