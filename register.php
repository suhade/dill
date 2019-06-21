<?php

$servername = "localhost";
$database = "chartdb";

$conn = mysqli_connect ($servername, $database);

if(!$conn)
{
		die ("Connection failure:".mysqli_connect_error());
}
else {
		$firstName = $_POST["fName"];
		$lastName = $_POST["lName"];
		$email = $_POST["emailId"];
		$password = md5($_POST["pass"]);
		
		$secQues = mysqli_real_escape_string($conn, $_POST["secQues"]);
		$secAns = mysqli_real_escape_string($conn, $_POST["secAns"]);
		
		$sql = "INSERT INTO 'chartInfo' ('sr no.', 'firstName', 'lastName', 'email', 'password', 'secQues', 'secAns')
		VALUES(NULL, '$firstName', '$lastName', '$email', '$password', '$secQues', '$secAns');";
		
		$success = mysqli_query ($conn, $sql);
			if(success ) {
				echo "Thank you for registering. You can login now with email and password.";
			}
			else {
				echo "Sorry, registration failed. Kindly, try again.";
			}
			
		mysqli_close($conn);
}


?>