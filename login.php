
<!DOCTYPE html>
<head>
<title>Login Form</title>
<style>
body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 1px;
  text-align: center;
  background:rgb(55,55,55);
  color: white;
  font-size: 30px;
}
a:link{
text-decoration:none;

}
a:hover{
text-decoration:underline;
}
</style>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>
<div class="header">
  <h1>Login</h1>
</div>
 <div class="topnav">
  <a  href="frontpage.php" style="float:left">Home</a>
  <a href="index.php" style="float:left">Sunglass</a>
  <a href="contactlens.php" style="float:left">Contact lenses</a>
  <a href="eyeglass.php" style="float:left">Eye glasses</a>
  <a href="powerglass.php" style="float:left">Power glasses</a>
  
  <a  class="active" href="login.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Signup</a>
</div>
<div id="login-box">
   <div class="right-box">
      <form class="box" action="login1.php" method="post" >
       <h1>Login</h1>
	   <br></br>
         Email address:<input type="text" name="email_id" value=<?php echo Cookie_val(1) ?>><br>
          Password:<input type="password" name="password" value= <?php echo Cookie_val(2) ?>><br>
		  
	<input type="checkbox" name="remember" > <font face="verdana" size="2" color="black">Remember me</font><br></br>
          <input type="submit" name="login-button" value="LOGIN" style="background-color:#000000;"></input>
       </form>
	  </div>
	  <div class="left-box">
	<span class="signinwith">Sign in with<br/>Social Network</br></span>
	<button class="social facebook">Log in with Facebook</br></button>
	<button class="social google">Log in with Google+</button>
	</div>
</div>
	  
</body>

<?php
	session_start();
	$_SESSION['user'] = $_POST['email_id'];
	$person  = $_SESSION['user'];
    function Cookie_val($ch){
    if ($ch==1)
    {   
        if (isset($_COOKIE['EMail']))
        {
            return $_COOKIE['EMail'];
        }
        else 
            return;
    }
    else
    {
        if (isset($_COOKIE['Pwd']))
        {
            return $_COOKIE['Pwd'];
        }
        else 
            return;
    }
    }
?>

</html>