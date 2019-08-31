<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<style>

body {
  font-family: Arial;
  margin: 0;
}

.header {
  padding: 1px;
  text-align: center;
  background:rgb(55,55,55) ;
  color: white;
  font-size: 30px;
}
.topnav a.active {
  background-color:rgb(55,55,55);
  color: white;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1500px;
  position: relative;
  margin: auto;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

ul {
  list-style: none
}
a {
  text-decoration: none
}
.generic-anchor {
	color: $primary-light-blue;
	&:visited {
		color: $primary-light-blue
	}
	&:hover {
		color: $primary-line-color
	}
}
.flex-rw {
  display: flex;
  flex-flow: row wrap;
}
//This main is mostly to push the footer to the bottom and for demo purposes.
main {
  flex: 1 1 auto; //For IE11
  display: flex;
  align-items: center;
  justify-content: center;
  font: 10em "Oswald", sans-serif;
  color: rgb(155,155,155);
  line-height: 1
}
footer {
  background: rgb(55,55,55);
  margin-top: auto;
  width: 100%
}
.footer-list-top {
  width: 33.333%
}
.footer-list-top > li {
  text-align: center;
  padding-bottom: 10px
}
.footer-list-header {
  padding: 10px 0 5px 0;
  color: #fff;
  font: 2.3vw "Oswald", sans-serif
}
.footer-list-anchor {
  font: 1.3em "Open Sans", sans-serif
}
.footer-social-section {
  width: 100%;
  align-items: center;
  justify-content: space-around;
  position: relative;
  margin-top: 5px;
}
.footer-social-section::after {
  content: "";
  position: absolute;
  z-index: 1;
  top: 50%;
  left: 10px;
  border-top: 1px solid $primary-line-color;
  width: calc(100% - 20px)
}
.footer-social-overlap {
  position: relative;
  z-index: 2;
  background: rgb(55,55,55);
  padding: 0 20px
}
.footer-social-connect {
  display: flex;
  align-items: center;
  font: 2.5em "Oswald", sans-serif;
  color: #fff
}
.footer-social-small {
  font-size: 0.6em;
  padding: 0px 20px
}
.footer-social-overlap > a {
  font-size: 3em
}
.footer-social-overlap > a:not(:first-child) {
  margin-left: 0.38em
}
.footer-bottom-section {
  width: 100%;
  padding: 10px;
  border-top: 1px solid $primary-line-color;
  margin-top: 10px
}
.footer-bottom-section > div:first-child {
  margin-right: auto
}
.footer-bottom-wrapper {
  font-size: 1.5em;
  color: #fff
}
.footer-address {
  display: inline;
  font-style: normal
}
@media only screen and (max-width: 768px) {
  .footer-list-header {
    font-size: 2em
  }
  .footer-list-anchor {
    font-size: 1.1em
  }
  .footer-social-connect {
    font-size: 2.5em
  }
  .footer-social-overlap > a {
    font-size: 2.24em
  }
  .footer-bottom-wrapper {
    font-size: 1.3em
  }
}
@media only screen and (max-width: 568px) {
  main {
    font-size: 5em
  }
  .footer-list-top {
    width: 100%
  }
  .footer-list-header {
    font-size: 10px;
  }
  .footer-list-anchor {
    font-size: 1.5em
  }
  .footer-social-section {
    justify-content: center
  }
  .footer-social-section::after {
    top: 25%
  }
  .footer-social-connect {
    margin-bottom: 10px;
    padding: 0 10px
  }
  .footer-social-overlap {
    display: flex;
    justify-content: center;
  }
  .footer-social-icons-wrapper {
    width: 100%;
    padding: 0
  }
  .footer-social-overlap > a:not(:first-child) {
    margin-left: 20px;
  }
  .footer-bottom-section {
    padding: 0 5px 10px 5px
  }
  .footer-bottom-wrapper {
    text-align: center;
    width: 100%;
    margin-top: 10px
  }
}
@media only screen and (max-width: 480px) {
  .footer-social-overlap > a {
    margin: auto
  }
  .footer-social-overlap > a:not(:first-child) {
    margin-left: 0;
  }
  .footer-bottom-rights {
    display: block
  }
}
@media only screen and (max-width: 320px) {
  .footer-list-header {
    font-size: 2.2em
  }
  .footer-list-anchor {
    font-size: 1.2em
  }
  .footer-social-connect {
    font-size: 2.4em
  }
  .footer-social-overlap > a {
    font-size: 2.24em
  }
  .footer-bottom-wrapper {
    font-size: 1.3em
  }
}

button.social
{
	margin-bottom:20px;
	width:220px;
	height:36px;
	border:none;
	border-radius:2px;
	color:#fff;
	font-family: sans-serif;
	font-weight:500;
}
.facebook
{
	background:#32508e;
}
.google
{
	background:#dd4b39;
}



</style>


</head>
<body>

<div class="header">
  <h1>SPECSKART</h1>
</div>
 <div class="topnav" style="background-color:#000000;" >
  <a class="active" href="frontpage.php" style="float:left" style="background-color:rgb(55,55,55);
  color: white;">Home</a>
  <a href="index.php" style="float:left">Sunglass</a>
  <a href="contactlens.php" style="float:left">Contact lenses</a>
  <a href="eyeglass.php" style="float:left">Eye glasses</a>
  <a href="powerglass.php" style="float:left">Power glasses</a>
  
  <a href="logout.php" style="float:right">Logout</a>
  
</div> 
 <div class="slideshow-container">

<div class="mySlides fade">
  <img src="i2.jpg" style="width:100%;height:600px;" >
</div>

<div class="mySlides fade">
  <img src="slider1.jpg" style="width:100%;height:600px;">
</div>

<div class="mySlides fade">
  <img src="slider3.jpg" style="width:100%;height:600px;">
</div>

<div class="mySlides fade">
  <img src="slider4.jpg" style="width:100%;height:600px;">
</div>

<div class="mySlides fade">
  <img src="slider5.jpg" style="width:100%;height:600px;">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<footer class="flex-rw">
  <div style="color:white;"></div>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">About Company</h4></li>
	  <p style="font-size:20px;font-weight:500;">Lenskart is the leading e-commerce portal for eyewear in India.
	  It has revolutionised the eyewear industry in the country 
	  with its omni-channel approach. From an ever-growing number
	  of offline stores across major cities in the country to 
	  innovative integration of technology while purchasing 
	  online, Lenskart caters to every customer 
	  with several deals and offers.</p>
   
  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">Keep Connected</h4></li>


    <li><button class="social facebook">Like us on Facebook</br></button></li>
	<li><button class="social google">Add us on Google+</button></li>
    
    
  </ul>
  <ul class="footer-list-top">
    <li id='help'>
      <h4 class="footer-list-header">Contact Information</h4></li>
    <li><p style= "font-size:20px;font-colour:white;font-weight:500">Fort Songadh District Tapi Gujarat</p></li>
    <li><p style="font-size:20px;font-colour:white;font-weight:500">Pincode:394660</p></li>
	<li><p style="font-size:20px;font-colour:white;font-weight:500">Call:123456789</p></li>
	<li><p style="font-size:20px;font-colour:white;font-weight:500">example@gmail.com</p></li>
	
  </ul>
  
  <section class="footer-bottom-section flex-rw">
<div class="footer-bottom-wrapper">  
 
<i class="fa fa-copyright" role="copyright">
 

    </div>
    <div class="footer-bottom-wrapper">
    <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">Terms</a> | <a href="/privacy-policy.html" class="generic-anchor" rel="nofollow">Privacy</a>
      </div>
  </section>
</footer>


</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
