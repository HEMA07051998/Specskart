<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel="stylesheet" type="text/css" href="stylesign.css">
<link rel="stylesheet" type="text/css" href="style2.css">
<style>
body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 1px;
  text-align: center;
  background: rgb(55,55,55);
  color: white;
  font-size: 30px;
}
a:link{
text-decoration:none;

}
a:hover{
text-decoration:underline;
}
input[type="submit"]:hover,
input[type="submit"]:focus
{
	background:#ff5722;
	transition:0.2s ease;
}
input[type="submit"]
{
	margin-bottom:28px;
	width:120px;
	height:32px;
	background:#f44336;
	border:none;
	border-radius:2px;
	color:#fff;
	font-family:sans-serif;
	font-weight:500;
	text-transform:uppercase;
	transition:0.2s ease;
	cursor:pointer;
}
</style>
<script type="text/javascript">
function validateForm() {
	  var firname = document.forms["myForm"]["fname"].value;
	  var lasname = document.forms["myForm"]["lname"].value;
	  var mob = document.forms["myForm"]["number"].value;
	  var uemail = document.forms["myForm"]["email"].value;
	  var pwd = document.forms["myForm"]["pswd"].value;
	  var gender = document.forms["myForm"]["sex"].value;
	  var add = document.forms["myForm"]["address"].value;
	  var count = document.forms["myForm"]["country"].value;
      
      var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
       
	  if (firname == "") {
	    alert("Firstname must be filled out");
	    return false;
	  }
	  
	  if (lasname == "") {
	    alert("Lastname must be filled out");
	    return false;
	  }
	  
	  if (mob == "")
	   {
	    alert("Mobile number must be filled out");
	    return false;
	  }
	  
	  if (email == "") {
	    alert("Email must be filled out");
	    return false;
	  }
	  if (!ck_email.test(email)) {
	    errors[errors.length] = "You must enter a valid email address.";
	   }
	  
	   if (pwd == "") {
	    alert("Password must be filled out");
	    return false;
	  }
	  if(pwd.length<8)
	  {
	  	alert("Password should have minimum 8 characters.");
	  }
	  
	  if (gender == "") {
	    alert("Gender must be filled out");
	    return false;
	  }
	   if (add == "") {
	    alert("Address must be filled out");
	    return false;
	  }
	  if (count == "") {
	    alert("Country must be filled out");
	    return false;
	  } 
	  
	}
	</script>
</head>
<body onload="document.registration.name.focus();">

<div class="header">
  <h1>Signup</h1>
</div>
 <div class="topnav">
  <a  href="frontpage.php" style="float:left">Home</a>
  <a href="index.php" style="float:left">Sunglass</a>
  <a href="contactlens.php" style="float:left">Contact lenses</a>
  <a href="eyeglass.php" style="float:left">Eye glasses</a>
  <a href="powerglass.php" style="float:left">Power glasses</a>
  
  <a href="login.php" style="float:right">Login</a>
  <a class="active" href="signup.php" style="float:right">Signup</a>
</div>

<div id="login-box">
   <div class="right-box">
   
       <form   method="POST" action="action.php" name="myForm" onsubmit="return validateForm();" >
	   <h1>Signup</h1>
        <br>
         FirstName:<input type="text" name="fname" ><br>
		 LastName:<input type="text" name="lname"><br>
        Mobile:<input type="text" name="number" ><br>
       
        Email address:<input type="text" name="email" ><br>
        Password:<input type="password" name="pswd" style="border-bottom:1px solid #aaa;" ><br><br>
		Gender:<input type="radio" name="sex" value="male" checked >Male</input>
                                           <input type="radio" name="sex" value="female" >Female</input><br></br>
        Address:<input type="text" name="address" ><br>
        <div class="dropdown">
        <select  name="country" >
	    <option > Choose your Country  </option>
		<option value="India" selected>India  </option>
		<option value="Pakistan">  Pakistan </option>
		<option value="Sri Lanka">  Sri Lanka </option>
		<option value="Burma"> Burma  </option>
		<option value="Nepal"> Nepal  </option>
		<option value="Bhutan"> Bhutan </option>
		<option value="China"> China  </option>
		<option value="Bangladesh">Bangladesh </option>
		
	     </select><br></br>
		 
		 </div>
        <input type="submit"  name="register-button" value="REGISTER" style="background-color:#000000"></input>	
        </form>
    </div>
	<div class="left-box">
	<span class="signinwith">Sign in with<br/>Social Network</br></span>
	<button class="social facebook">Log in with Facebook</br></button>
	<button class="social google">Log in with Google+</button>
	<span class="alreadysigned">Already Signed up? <a href="login.html" style="color:white">Login</br></span>
	</div>

</div>
</body>
</html>