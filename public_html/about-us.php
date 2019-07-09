<?php 
session_start();
if(isset($_SESSION['username'])){
if($_SESSION['NumberVerified'] == 0){
echo "<script>window.location = 'otp.php'</script>";
}
}
include ('connection.php');


$username;
$flag=0;
if(isset($_SESSION['username'])){
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
<style>
.carouselSize{
				
				width:100%;
				height:200px;
				
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
p.italic {
    font-style: italic;
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
      <a class="navbar-brand" style="margin:0px;height:auto;" href="index.php"><img style= "width:50%;max-height:80px;"src="Images/heading-logo.png"></a>
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
echo '<li><a href="profile.php"><span class="glyphicon glyphicon-log-in"></span> PROFILE</a></li><hr style="Margin:5px;border-color:black">
<li><a href="logout.php"><span class="glyphicon glyphicon-list-alt"></span> MY BOOKINGS</a></li><hr style="Margin:5px;border-color:black">
			<li><a href="profile.php"><span class="fa fa-ban"></span> CANCEL BOOKINGS</a></li><hr style="Margin:5px;border-color:black">
<li><a href="logout.php"><span class="fa fa-sign-out"></span> LOGOUT</a></li>';
		 ?>
            
		 </ul>
	 </li>
</ul>
 </div>
  </div>
</nav>

												<!--end of Drop Down -->
<br><br><br><br><br><br>
                                                                                       <!--start of about-us page-->

        <div>
          <p class="italic">&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-quote-left"> </span><font size="4">

In this world where there is a lot of stress on the minds of every second person,so to reduce this stress most of the people prefer travelling to various places. While travelling the environment of the person changes and feels relaxed inspite of all the stress and travelling means planning various things like where to go,how to go, price and most important is booking of hotels,trains,etc.<br>
Our website provides booking of hotels,trains easily without having any tesion.Just type in the destination where you want to travel and list of hotels in that destination is displayed.Booking of railway tickets can also be done.<br>
Our webiste has user-friendly environment so that the user can easily books tickets,hotels.<br>
We also provide some of the trending packages.<span class="fa fa-quote-right"></font></p>
        </div>
<center>
        <div> <img src="Images/heading-logo.png">
        <h2>Meera Travels</h2>

        <ul>
<div style="float:left;margin-right:100px">
          <li>
            <img src="images/demo/team-member.gif">
              <figcaption>
                <p>Jayesh Kukreja</p>
                <p>Coder</p>
              </figcaption>
          </li>
</div>
<div style="float:left;margin-right:100px">
          <li>
            <img src="Images/nik.jpg">
              <figcaption>
                <p>Nikhil Motwani</p>
                <p>Coder</p>
              </figcaption>
          </li>
</div>
<div style="float:left;margin-right:100px">
          <li>
            <img src="images/demo/team-member.gif">
              <figcaption>
                <p>Mayur Talreja</p>
                <p>Coder</p>
              </figcaption>
          </li>
</div>
<div style="float:left;margin-right:100px">
          <li>
            <img src="images/demo/team-member.gif">
              <figcaption>
                <p>Hitesh Thakur</p>
                <p>Coder</p>
              </figcaption>
        </ul>
</div>
</center>
      </div>
                                                                                        <!--end of about-us page-->

                                                                                                <!-- footer start-->
														
														
<div style="background-color: rgb(235,242,247);margin-top:500px;">
<div class="container" >
<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-info-circle"></span>  Info</font><br><hr style="border-color:black">
<a href="#">About Us </a><br>
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