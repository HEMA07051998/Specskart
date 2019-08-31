<!DOCTYPE html>
<html>
<head>
	<title>form action</title>
</head>
<body>
<?php
$uemail = $_POST["email_id"];
$pwd = $_POST["password"];
$tab_name="login";

// Create connection
$conn = mysqli_connect("localhost", "root", "");

// Check connection
if (! $conn) {
    print("Connection error");
} 

if(! mysqli_select_db($conn, "specskart")){
    print("Database connection error");
}

$query = "SELECT * FROM register WHERE email='$uemail' && pswd='$pwd'";
		//$query2 = "SELECT email FROM register WHERE email='$uemail' and pswd='$pwd'";

		$result = mysqli_query($conn,$query);
		//$result2 = mysqli_query($connection, $query2);
		if($result)
		{
			$count = mysqli_fetch_assoc($result);

			if ($count)
			{

				//$row = mysqli_fetch_row($result2);
				$semail= $uemail;
				session_start();
				$_SESSION['EMAIL']=$semail;
				$_SESSION['Status']="Session Status: Login Success!!!";

				if (isset($_POST['remuser'])){
					setcookie("UName",$uemail,time()+60*60*24);
					setcookie("Pwd",$pwd,time()+60*60*24);
				}
				else
				{
					setcookie("EMail","",time()-5);
					setcookie("Pwd","",time()-5);
				}


				header("location:frontpage1.php");
			}
			else
			{
				print("Invalid Details");
			}
		}
		else
		{
			print("Sql Query Error");
		}
		
?>
</body>
</html>