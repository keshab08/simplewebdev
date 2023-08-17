<?php
 
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	  
	// Database connection
	$conn = new mysqli('localhost','root','','a');
	echo "okay";
	if($conn->connect_error){
		die('connection Failed' .$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into b(firstName, lastName) 
        values(?,?)");
		$stmt->bind_param("ss", $firstName, $lastName );
		$stmt->execute();
		 
		echo "Registration successfully..."; 
		$stmt->close();
		$conn->close();

	}
	 
 
?>  