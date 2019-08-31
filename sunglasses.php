

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">


<style>
*{
  box-sizing:border-box;
}
body{
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
.container{
  max-width:100%;
  margin-right:10px;
  margin-left:90px;
  background:#f2f2f2;
  overflow:auto;
}
.gallery{
  margin:10px;
  border:1px solid #ccc;
  float:left;
  width:390px;
}
.gallery img{
width:100%;
height:auto;
}
.desc{
padding:15px;
text-align:center;
}
.div .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

</style>


</head>

<body>
<div class="header">
  <h1>Power glasses</h1>
</div>
 <div class="topnav">
 <a  href="frontpage.php" style="float:left">Home</a>
 <a class="active" href="sunglasses.php" style="float:left">Sun glasses</a>
  <a href="contactlens.php" style="float:left">Contact lenses</a>
   <a href="eyeglass.php" style="float:left">Eye Glasses</a>
  <a href="powerglass.php" style="float:left">Power glasses</a>
  <a href="cart.php" style="float:left">Cart</a>
  
  <a href="login.php" style="float:right">Login</a>
  <a href="signup.php" style="float:right">Signup</a>
  <a><i class="fa fa-heart" style="font-size:24px;color:red"></i></a>
</div> 
<div class="container">
   <div class="gallery">
       <img src="sun1.jpg" id="sun1">
	      <div class="desc">Rs.999    <button class="btn" onclick="var v=document.getElementById('sun1');">Buy</button></div>
    </div>
	<div class="gallery">
       <img src="sun2.jpg" id="sun2">
	      <div class="desc">Rs.1499   <button class="btn"  onclick="var v=document.getElementById('sun1');">Buy</button></div>
    </div>
	<div class="gallery">
       <img src="sun3.jpg" id="sun3">
	      <div class="desc">Rs.1000   <button class="btn"  onclick="location.href='cart.php'">Buy</button></div>
    </div>
	<div class="gallery">
       <img src="sun4.jpg" id="sun4">
	      <div class="desc">Rs.899    <button class="btn"  onclick="location.href='cart.php'">Buy</button></div>
    </div>
	<div class="gallery">
       <img src="sun5.jpg" id="sun5">
	      <div class="desc">Rs.1500   <button class="btn"  onclick="location.href='cart.php'">Buy</button></div>
    </div>
	<div class="gallery">
       <img src="sun6.jpg" id="sun6">
	      <div class="desc">Rs.1300   <button class="btn"  onclick="location.href='cart.php'">Buy</button></div>
    </div>
</div>
	


</body>
</html>