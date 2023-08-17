<?php
 
	$make = $_POST['make'];
	$model = $_POST['model'];
	$year = $_POST['year'];
	$milage = $_POST['milage'];
	$location = $_POST['location'];
	$price = $_POST['price'];

     

	// Database connection
	$conn = new mysqli('localhost','root','','onlinecar');
	 

	if($conn->connect_error){
		die('connection Failed' .$conn->connect.error);
	}
	else{
		$stmt = $conn->prepare("insert into car(make, model, year, milage, location, price) 
        values(?,?,?,?,?,?)");
		$stmt->bind_param("ssiisi",$make, $model, $year, $milage , $location, $price );
		 $stmt->execute();
		 
		echo "Registration successfull"; 
		$stmt->close();
		$conn->close();

	}
	 
	 
	
?>  
 