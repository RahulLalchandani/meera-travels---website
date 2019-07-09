<?php 
session_start();
if(isset($_SESSION['username'])){
if($_SESSION['NumberVerified'] == 0){
echo "<script>window.location = 'otp.php'</script>";
}
else{
echo "<script>window.location = 'index.php'</script>";
}
}
include ('connection.php');
?>

<html lang="en">

<head>
  <link rel="stylesheet" href="css/font-awesome.min.css ">
  <title>Meera Travels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/footer.css">
<link rel="icon" type="image/x-icon" href="Images/icon.png">
<script>
function formValidation(){
if(!(document.getElementById("pwd").value==document.getElementById("pwd1").value)){
alert("PASSWORD DOES'T MATCHED");
return false;
}
var phn = document.getElementById("phone").value;
var tuorfal = false;
if(document.getElementById("phone").value.length==10 && !phn.match(/[a-z]/i) ){
$.ajax({
        url: 'checkForNum.php',
        type: 'POST',
async: false,
        data: { phone: phn} ,
        success: function (response) {
         if(response){
$( "#phone" ).addClass( "animated shake" );
$( "#phone" ).css( "border","1px red solid" );
alert(response);
 tuorfal =  false;
}
else{

//alert("no");
tuorfal = true;
}
        },
        error: function () {
            //your error code
        }
    });
return tuorfal;
}
}

</script>
<style>
.carouselSize{
				
				width:100%;
				height:700px;
				
} 



#MYACCOUNT{
color:#fff;
margin-top:50px;
background:rgb(0,94,57);
}
#MYACCOUNT:hover{
color:rgb(0,94,57);
background:white;
}
#CUSTOMERSUPPORT{
color:#fff;
margin-top:50px;
background:rgb(0,94,57);
}
#CUSTOMERSUPPORT:hover{
color:rgb(0,94,57);
background:white;
}
#ABOUTUS:hover{
color:rgb(0,94,57);
}
#CONTACTUS:hover{
color:rgb(0,94,57);
}
#LOGIN:hover{
color:rgb(0,94,57);
}
#SIGNUP:hover{
color:rgb(0,94,57);
}
.FormZindex *{
position:absolute;z-index: -1;
}
.formMobliefriend{
margin:10%;
width:35%;
background:white;
}

@media only screen and (max-width: 800px){

.formMobliefriend{
margin:5%;
background:white;
width:80%;
}
}	

@media only screen and (max-width: 700px){

.formMobliefriend{
margin-top:12%;
background:white;
width:80%;
}
}

@media only screen and (max-width: 600px){

.formMobliefriend{
margin-top:20%;
background:white;
width:80%;
}
}

@media only screen and (max-width: 500px){

.formMobliefriend{
margin-top:20%;
background:white;
width:80%;
}
}

@media only screen and (max-width: 400px){
.formMobliefriend{
margin-top:20%;
background:white;
width:80%;
}
}
				</style>
  
 </head>


<link rel="stylesheet" href="css/offer-style.css">
<body>
<!--start of navbar-->
<nav class="navbar navbar-default navbar-fixed-top" style="background:white;margin-bottom:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="margin:0px;height:auto;" href="index.html"><img style= "width:50%;max-height:80px;"src="Images/heading-logo.png"></a>
    </div>
    
      
												<!--Start of Drop Down -->	  

<div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav navbar-right">
		<li class="dropdown" id="PARENTCUSTOMERSUPPORT">
		  <a id="CUSTOMERSUPPORT" data-toggle="dropdown"><span class="fa fa-life-ring"></span> CUSTOMER SUPPORT <span class="caret"></span> </a>
		   <ul class="dropdown-menu">
            <li><a id="ABOUTUS" href="about-us.php"><span class="fa fa-info-circle"></span> About us </a></li><hr style="Margin:5px;border-color:black">
            <li><a id = "CONTACTUS" href="contactus.html"><span class="fa fa-mobile" style="font-size:22px"></span> Contact us</a></li>
            
         </ul>
	 </li>

	<li class="dropdown parentNav">
	  <a id="MYACCOUNT" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> MY ACCOUNT <span class="caret"></span> </a> 
		 <ul class="dropdown-menu">
            <li><a id="LOGIN" href="login.html"><span class="glyphicon glyphicon-log-in"></span> LOGIN </a></li> <hr style="Margin:5px;border-color:black">
            <li><a id="SIGNUP" href="sign-up.html"> <span class="fa fa-user-plus"></span> SIGN UP </a></li>
		 </ul>
	 </li>
</ul>
 </div>
  </div>
</nav>

												<!--end of Drop Down -->

												<br/>
												<br/>
												<br/>
												<br/>
												<br/>
												<br/>
												
												
												<!--start of signup form-->
												
<form action="sign-up.php" method="post" onsubmit="return formValidation()">
<img style="z-index:-1;position:absolute" src="Images\login-background.jpg">
<center>
<br/>

<div style="width:20%;background:rgba(0,0,0,0.6);">
<br/>
	<div class="form-group">
	<label for="name">
	<input type="text" placeholder="Enter First Name" style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="name" id="name" required>
	</div>
	
	<div class="form-group">
	<label for="name1">
	<input type="text" placeholder="Enter Last Name" style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="name1" id="name1" required>
	</div>
	
	<div class="form-group">
	<label for="email">
	<input type="email" placeholder="Enter Email" style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="email" id="email" required>
	</div>
	
	<div class="form-group">
	<label for="pwd">
	<input type="password" placeholder="Enter Password"style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="pwd" id="pwd" required>
	</div>
	
	<div class="form-group">
	<label for="pwd1">
	<input type="password" placeholder="ReEnter Password"style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="pwd1" id="pwd1" required>
	</div>

        <div class="form-group">
	<label for="phone">
	<input type="text" placeholder="Mobile"style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" maxlength = "10"  name="phone" id="phone" required>
	</div>


        <div class="form-group">
	
	<select style="width:215px" name = "gender" id="gender" class="form-control">
	<option>Male</option>
        <option>Female</option>
        <option>Other</option>
        </select>
</div>

<div class="form-group">
	<label for="address">
	<input type="text" placeholder="Address"style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="address" id="address" required>
	</div>

	
	 <h5 style="color:#fff">Already a Member? <a href="login.html">Login <h5></a>
	
	<input type="Submit" value="Create Account" style="width:250;background:rgba(255,255,255,0.8)" class="form-control" name="butt" id="butt">
</div>


</center>
</form>
												<!-- end of sign-up form-->
  												<!-- footer start-->
														
														
<div style="background-color: rgb(235,242,247);" margin-top="50px">
<div class="container" >
<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-info-circle"></span>  Info</font><br><hr style="border-color:black">
<a href="about-us.php">About Us </a><br>
<a href="pp.php">Privacy Policy </a>
</div>


<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-cogs"></span>  Product & Services</font><br><hr style="border-color:black">
<a href="index.php">Hotels </a><br>
<a href="index.php">Flight </a><br>
<a href="index.php">Bus </a><br>
<a href="index.php">Train</a><br>
<a href="index.php">Packages</a>
</div>


<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-hand-o-up"></span>  Get In Touch</font><br><hr  style="border-color:black">

<a href="contactus.html">Address: </a><br>
<a href="contactus.html">Email </a><br>
<a href="contactus.html">Phone: </a><br>

</div>

<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-suitcase"></span>  For Suppliers</font><br><hr  style="border-color:black">


<a href="insert_hotels.php">Add Hotel </a><br>


</div>

<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-globe"></span>  Socialize with us</font><br><hr  style="border-color:black">


<a href="https://www.instagram.com/meeratravelstk"><span style="font-size:30px;float:left;margin-right:5px;" class="fa fa-instagram"></span> </a>
<a href="https://www.facebook.com/meeratravels.tk/"><span style="font-size:30px;float:left;margin-right:5px;" class="fa fa-facebook-official"></span> </a>
<a href="https://plus.google.com/u/0/112679737157642824894"><span style="font-size:30px;float:left;margin-right:5px;" class="fa fa-google-plus"></span> </a>
<a href="https://www.twitter.com/meera_travels"><span style="font-size:30px;float:left;margin-right:5px;" class="fa fa-twitter"></span> </a>
</div>
</div>
</div>
												<!--footer end-->
 </body>
</html>