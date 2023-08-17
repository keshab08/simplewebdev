<?php
  
	$model = $_POST['model'];
	 
	$location = $_POST['location'];
  
	// Database connection
	$conn = new mysqli('localhost','root','','onlinecar');
	 

	if($conn->connect_error){
		die('connection Failed' .$conn->connect.error);
	}
	else{
		$stmt = $conn->prepare("select * from car where model='$model' and location='$location');
	 $conn->show($stmt);
		 
		$conn->close();

	}
	 
	 
	
?>  