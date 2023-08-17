<?php
   
  
	  
	// Database connection
	$conn = new mysqli('localhost','root','','onlinecar');{
        $username = $_POST['username'];
        $password = $_POST['password'];
     
    

    $query="select * from seller where 
    username='$username' and password='$password'";

    $result=mysqli_query($conn, $query);
    $count= mysqli_num_rows($result);
    if($count>0){
        echo "Login Successful";
    }
    else{
        echo "Login unSuccessful";
    }
}
	 
	?>	 
		 
		 