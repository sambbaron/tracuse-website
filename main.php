<?php

date_default_timezone_set("America/New_York");

	// Post Tracuse Call to Action Form
	function postForm() {
		
		// Credentials
		include '/home/tracuse8/config/config.php';
		
		// Open connection
		$con=mysqli_connect("localhost",$DB_USER, $DB_PASSWORD, $DB_NAME,"3306");
		
		// Check connection
		if (mysqli_connect_errno()) {
		  return;
		  // die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
		
		// Pull values
		$ip_addr = $_SERVER['REMOTE_ADDR'];
		$orgtype = mysqli_real_escape_string($con, $_POST['orgtype']);
		$email = mysqli_real_escape_string($con, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
		$involve = mysqli_real_escape_string($con, $_POST['involvement']);
		
		// Test whether input email address is existing and valid
		 if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		 	errEmail("Email", $email);
			goto close;
		  };
		
		// Set email and involvement as session variable for passing to survey
		$_SESSION['orgtype']=$orgtype;
		$_SESSION['email']=$email;
		$_SESSION['involve']=$involve;
		
		// Create insert query
		$sql="INSERT INTO Landing (IP_Addr, OrgType, Email, Involvement)
		VALUES ('$ip_addr','$orgtype', '$email', '$involve')";
		
		// Run query and test error
		if (!mysqli_query($con,$sql)) {
		  errEmail("MySQL", mysqli_error($con));
		  goto close;
		}
		
		// Send email for successful signup
		mail($ADMIN_EMAIL,"Tracuse Signup",
		  "Tracuse Signup \nDate: " . date('m/d/Y h:i a', time()) . "\n". $email . ": " . $involve
		);

		close:		
		mysqli_close($con);
	};

	// Send error email message to me	
	function errEmail($errTyp, $errMsg) {
			
		// Credentials
		include '/home/tracuse8/config/config.php';
		
		mail($ADMIN_EMAIL,"Tracuse Form Error",
		  "Tracuse Form Error \nDate: " . date('m/d/Y h:i a', time()) . "\n". $errTyp . ": " . $errMsg
		);
	};
	
?> 