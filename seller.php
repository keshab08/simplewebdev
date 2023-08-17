<?php
 
	$name = $_POST['name'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	  

	// Database connection
	$conn = new mysqli('localhost','root','','onlinecar');
 
	if($conn->connect_error){
		die('connection Failed' .$conn->connect.error);
	}
	else{
		$stmt = $conn->prepare("insert into seller(name, address,
		number, email, username, password) 
        values(?,?,?,?,?,?)");
		$stmt->bind_param("ssisss",$name, $address, $number, $email , $username, $password  );
		 $stmt->execute();
		 
		echo "Registration successfull"; 
		$stmt->close();
		$conn->close();

	}
	 
 
?>  