<?php

session_start();
$username;
$flag=0;
if($_SESSION['username']){
$now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
        }

$username = $_SESSION['username'];
$flag=1;
}
else
{
	$username = "MY ACCOUNT";
}
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
if(!(document.getElementById("npass").value==document.getElementById("cpass").value)){
alert("PASSWORD DOES'T MATCHED");
return false;
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
            <li><a id="ABOUTUS" href="#"><span class="fa fa-info-circle"></span> About us </a></li><hr style="Margin:5px;border-color:black">
            <li><a id = "CONTACTUS" href="contactus.html"><span class="fa fa-mobile" style="font-size:22px"></span> Contact us</a></li>
            
         </ul>
	 </li>

	<li class="dropdown parentNav">

	  <a id="MYACCOUNT" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?> <span class="caret"></span> </a> 
		 <ul class="dropdown-menu">
<?php 
		 if($flag==0){
		 echo '<li><a id="LOGIN" href="login.html"><span class="glyphicon glyphicon-log-in"></span> LOGIN </a></li> <hr style="Margin:5px;border-color:black">
            <li><a id="SIGNUP" href="sign-up.html"> <span class="fa fa-user-plus"></span> SIGN UP </a></li>';
		 }
		 else
			echo '<li><a href="logout.php"><span class="fa fa-sign-out"></span>LOGOUT</a></li>';
		 ?>
         	  
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
												
<form action="chngpassback.php" method="post" onsubmit="return formValidation()">
<img style="z-index:-1;position:absolute" src="Images\login-background.jpg">
<center>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<div style="width:20%;background:rgba(0,0,0,0.6);">
<br/>
	<div class="form-group">
	<label for="name">
	<input type="text" placeholder="Phone" style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="ph" id="ph" required>
	</div>
<div class="form-group">
	<label for="name">
	<input type="text" placeholder="OTP" style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="otp" id="otp" required>
	</div>
<div class="form-group">
	<label for="name">
	<input type="password" placeholder="New Password" style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="npass" id="npass" required>
	</div>
<div class="form-group">
	<label for="name">
	<input type="password" placeholder="Confirm Password" style="background:rgba(0,0,0,0.8);color:#fff;" class="form-control" name="cpass" id="cpass" required>
	</div>
	
	<input type="Submit" value="Submit" style="width:250;background:rgba(255,255,255,0.8)" class="form-control" name="butt" id="butt">
</div>


</center>
</form>
												<!-- end of sign-up form-->
  												<!-- footer start-->
														
														
<div style="background-color: rgb(235,242,247);margin-top:350px;">
<div class="container" >
<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-info-circle"></span>  Info</font><br><hr style="border-color:black">
<a href="#">About Us </a><br>
<a href="#">Privacy Policy </a>
</div>


<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-cogs"></span>  Product & Services</font><br><hr style="border-color:black">
<a href="#">Hotels </a><br>
<a href="#">Flight </a><br>
<a href="#">Bus </a><br>
<a href="#">Train</a><br>
<a href="#">Packages</a>
</div>


<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-hand-o-up"></span>  Get In Touch</font><br><hr  style="border-color:black">

<a href="contactus.html">Address: </a><br>
<a href="contactus.html">Email </a><br>
<a href="contactus.html">Phone: </a><br>

</div>

<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-suitcase"></span>  For Suppliers</font><br><hr  style="border-color:black">


<a href="#">Add Hotel </a><br>


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