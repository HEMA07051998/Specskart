<?php 
		extract($_POST);
		$mysqli = new mysqli('localhost', 'root','','specskart');

		if($mysqli->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
		}
		
		$query = "INSERT INTO register VALUES 
('$fname','$lname', '$number', '$email', '$pswd','$sex','$address','$country')";
		$insert_row = $mysqli->query($query);
		if($insert_row)
		{
		  echo "<script type='text/javascript'>";
		  echo "alert('Registered Succesfully!');";
		  echo "</script>"; 
		  //echo "Connected Succesfully";
		  header("location:frontpage1.php");
		}
		else{
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
?>