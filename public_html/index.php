<?php 
session_start();
if(isset($_SESSION['username'])){
$now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
            echo "Your session has expired! <a href='http://localhost/somefolder/login.php'>Login here</a>";
        }

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
<link rel="stylesheet" href="css/package.css">
<link rel="icon" type="image/x-icon" href="Images/icon.png">
<style>
@keyframes stretch {
  /* declare animation actions here */
}

}
</style>
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
				</style>

<script>
function updateDate(){
var today = new Date();

var date = today.getDate();
var mon = today.getMonth()+1;

var mon1 = today.getMonth()+1;

var year = today.getFullYear();

if(date < 10){
date = "0"+date;
}
if(mon < 10){
mon = "0"+mon;
}
var onlyToday = year+"-"+mon+"-"+date;

mon1 = mon1 + 3;
if(mon1 < 10){
mon1 = "0"+mon1;
}
//alert(year+"-"+mon+"-"+date);
//alert(year+"-"+mon+"-"+date);
document.getElementById("checkoutdate").setAttribute("min",onlyToday);
document.getElementById("checkoutdate").setAttribute("max",year+"-"+mon1+"-"+date);
document.getElementById("checkindate").setAttribute("min",onlyToday);
document.getElementById("date").setAttribute("min",onlyToday);
document.getElementById("date").setAttribute("max",year+"-"+mon1+"-"+date);
document.getElementById("date").setAttribute("min",onlyToday);
}
</script>
  
 </head>


<link rel="stylesheet" href="css/offer-style.css">
<body onload = "updateDate()">
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
            <li><a id="ABOUTUS" href="about-us.php"><span class="fa fa-info-circle"></span> About us </a></li><hr style="Margin:5px;border-color:black">
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
<li><a href="mybookings.php"><span class="glyphicon glyphicon-list-alt"></span> MY BOOKINGS</a></li><hr style="Margin:5px;border-color:black">
<li><a href="logout.php"><span class="fa fa-sign-out"></span> LOGOUT</a></li>';
		 ?>
            
		 </ul>
	 </li>
</ul>
 </div>
  </div>
</nav>

												<!--end of Drop Down -->

												<!-- Start of slider-->
												
												
<div id="myCarousel" class="carousel slide FormZindex pd-tp-10" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="width:100%;height:500px">
    <div class="item active">
      <img src="images/img2.jpg" style="height:580px" alt="Home" class="carouselSize">
    </div>

    <div class="item">
      <img src="images/img3.jpg" style="height:800px" alt="Home" class="carouselSize">
    </div>

    <div class="item">
     <img src="images/img4.jpg" style="height:720px" alt="Home" class="carouselSize">
    </div>

    <div class="item">
      <img src="images/img5.jpg" style="height:580px" alt="Home" class="carouselSize">
    </div>
  </div>

 </div>
													<!-- End of slider -->



													<!-- Start of form-->
<br>
<br>
<div class="formMobliefriend">
<ul  class="nav nav-tabs">
	<li class="active" > <a data-toggle="tab" href="#Hotels" name="hotels"> <span class="fa fa-hotel"> </span>  Hotel </a> </li>
	<li id = "bustab"><a data-toggle="tab" href="#Bus" name="bus"> <span class="fa fa-bus"> </span> Bus </a> </li>
    <li> <a data-toggle="tab" href="#Train">  <span class="fa fa-train"> </span>  Train </a> </li>
	<li> <a data-toggle="tab" href="#Flight"> <span class="fa fa-plane"> </span> Flight </a> </li>
	<li> <a href="packages.php"> <span class="fa fa-suitcase"> </span> Packages </a> </li>
</ul>	
<div class="tab-content" style="margin:10px;">
  
  
    
	
												<!-- Hotel form-->	
												
<div id="Hotels" class="tab-pane fade in active">										
<form method="post" action="hotels.php">
	<span class="fa fa-map-marker"> </span>Destination<br>
	<Input type="Text" placeholder="Enter Destination" name="destination" required><br><br>
	
	<font style="margin-right:135px">Check In</font> Check out<br>
	 <input type="date" style="margin-right:35px" id ="checkindate" name="checkindate" placeholder="Enter check-in date" required>  <input type="date" id ="checkoutdate" name="checkoutdate" placeholder="Enter check out date" required><br> <br>
	 
<span class="fa fa-users"> </span>	 Rooms and Guest <input type="number" style="width:120px" name="hr" placeholder="Rooms" required> <input type="number" style="width:80px" placeholder="guest" name="hg" required><br> 

	<input type="submit" value="Search Hotels" style="margin-left:220px;margin-top:10px;color:white;background:red;face:arial">
	</form>
  </div>
  
  
  
															<!-- Bus form-->	
	 
	 <div id="Bus" class="tab-pane fade">
	 <form>
	<span class="fa fa-map-marker"> </span> <font style="margin-right:152px;"> From  </font><span class="fa fa-map-marker"> </span>To<br>
	<Input type="Text" placeholder="Enter Destination" style="margin-right:25px"> 
	<Input type="Text" placeholder="Enter Destination"><br><br>
	
	
	<font style="margin-right:135px">Departure</font> <br>
	 <input type="date" style="margin-right:35px" placeholder="Enter date">  <br>
	 <input type="submit" style="margin-left:180px;color:white;background:red" value="Search Bus">
	</form>
  </div>
  
  <div id="Train" class="tab-pane fade">
     
														<!-- Train form-->	
	 
	 <form>
	<span class="fa fa-map-marker"> </span> <font style="margin-right:152px;"> From  </font><span class="fa fa-map-marker"> </span>To<br>
	<Input type="Text" placeholder="Enter Destination" style="margin-right:25px"> 
	<Input type="Text" placeholder="Enter Destination"><br><br>
	
	
	<font style="margin-right:135px">Departure</font> <br>
	 <input type="date" style="margin-right:35px" placeholder="Enter date">  <br>
	<input type="submit" style="margin-left:180px;color:white;background:red" value="Search Trains">
	</form>
  </div>

  <div id="Flight" class="tab-pane fade">

													<!-- Flight form-->	


<form  action="flights.php" method="post">
	<span class="fa fa-map-marker"> </span> <font style="margin-right:152px;"> From  </font><span class="fa fa-map-marker"> </span>To<br>
	<Input type="Text" placeholder="Enter Source" style="margin-right:25px" name="depart" id="depart"> 
	<Input type="Text" placeholder="Enter Destination" name="arr" id="arr"><br><br>
	
	
	<font style="margin-right:135px">Departure</font>No. of Tickets <br>
	 <input type="date" style="margin-right:35px" id="date" placeholder="Enter date"> 

<input type="number" style="margin-right:35px" placeholder="Number of Tickets" name="ticket" id="ticket"> <br>
      <input type="submit" style="margin-left:180px;margin-top:10px;color:white;background:red" value="Search Flights" >

	 </form>    

	</div>
  
<div id="Packages" class="tab-pane fade">
    
															<!-- packages form-->	
	
	
	<form>
	<span class="fa fa-map-marker"> </span>Destination<br>
	<Input type="Text" placeholder="Enter Destination"><br><br>
	
	<font style="margin-right:135px">Check In</font> <br>
	 <input type="date" style="margin-right:35px" placeholder="Enter checkin date">  <br> <br>
	 
	 Rooms and Guest <input type="number" style="width:120px" placeholder="Rooms"> <input type="number" style="width:80px" placeholder="guest"><br> 

	<input type="submit" value="Search Packages" style="margin-left:220px;margin-top:10px;color:white;background:red;face:arial">
	</form>
  </div>


  </div>
  </div>
  
																<!-- end of form-->	

																<!-- Offers form-->
  
<div style="background-color: rgb(235,242,247);">
  <div  class="container" style="margin-left:8%;">
  
<div class="offer-item" style="background-image:url(images/delhi.jpg);">
	<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Bangalore to Delhi</h4>
			<h6 style="color:red">Fares from Rs. 3099</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>


<div class="offer-item" style="background-image:url(images/chennai.jpg);">

<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Mumbai to Chennai</h4>
			<h6 style="color:red">Fares from Rs. 4499</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>

<div class="offer-item" style="background-image:url(images/udaipur.jpg);height:210px;width:230;float:left;margin:10px">
<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Mumbai to Udaipur</h4>
			<h6 style="color:red">Fares from Rs. 4199</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>

<div class="offer-item" style="background-image:url(images/jammu.jpg);height:210px;width:230;float:left;margin:10px">
<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Mumbai to Jammu</h4>
			<h6 style="color:red">Fares from Rs. 7699</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>

<div class="offer-item" style="background-image:url(images/odisha.jpg);height:210px;width:230;float:left;margin:10px">
<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Mumbai to Odisha</h4>
			<h6 style="color:red">Fares from Rs. 3299</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>

<div class="offer-item" style="background-image:url(images/goa.jpg);">
	<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Mumbai to Goa</h4>
			<h6 style="color:red">Fares from Rs. 3099</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>

<div class="offer-item" style="background-image:url(images/amritsar.jpg);">
	<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Mumbai to Amritsar</h4>
			<h6 style="color:red">Fares from Rs. 6299</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>

<div class="offer-item" style="background-image:url(images/indore.jpg);">
	<div class="offer-contains">
		<div style="margin:35px;">
			<h4><br/> Mumbai to Indore</h4>
			<h6 style="color:red">Fares from Rs. 5299</h6>
			<input class="offer-button" type="button" value="FLIGHT"><br/><br/>
		</div>
	</div>
</div>



</div>
</div>

<div style="margin:0px;">
	
	<div class="footer-image">
		<div class="footer-containers">
		<h2 style="color:white;margin-top:55px;"><span class="fa fa-paper-plane"></span> WHY WITH US?</h2><hr/>
		<div class="footer-item">
				<center>
					<span style = "color:white;font-size:80px;"class="fa fa-ticket"></span>
					<h1 style="color:white">EASY BOOKING</h1>
					<h3 style="color:white">Experience the convenience and savings.</h3>
					<h4 style="color:white">Browse cheap flight tickets in a user-friendly website.</h4>
				</center>
			</div>
			
			<div class="footer-item">
				<center>
					<span style = "color:white;font-size:80px;"class="fa fa-handshake-o"></span>
					<h1 style="color:white">CUSTOMER SATISFICATION</h1>
					<h3 style="color:white">Make a customer not a sale.</h3>
					<h4 style="color:white">Don't find a fault find the remedy.</h4>
				</center>
				
			</div>
			
			<div class="footer-item">
				
				<center>
					<span style = "color:white;font-size:80px;"class="fa fa-clock-o"></span>
					<h1 style="color:white">24/7 CUSTOMER SUPPORT</h1>
					<h3 style="color:white">A good traveler has no fixed plans and is not intent on arriving.</h3>
					
				</center>
				
			</div>
			
			<div class="footer-item">
				<center>
					<span style = "color:white;font-size:80px;"class="fa fa-credit-card-alt"></span>
					<h1 style="color:white">ONLINE PAYMENT</h1>
					<h3 style="color:white">Demonetisation Friendly.</h3>
					<h4 style="color:white">You can pay anytime anywhere.</h4>
				</center>
			</div>
		</div>
	</div>
	
</div>
<br/>
<br/>
<br/>
<br/>

  														<!-- footer start-->
														
														
<div style="background-color: rgb(235,242,247);">
<div class="container" >
<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-info-circle"></span>  Info</font><br><hr style="border-color:black">
<a href="#">About Us </a><br>
</div>


<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-cogs"></span>  Product & Services</font><br><hr style="border-color:black">
<a href="#hotels">Hotels </a><br>
<a href="#">Flight </a><br>
<a href="#bustab">Bus </a><br>
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


<a href="insert_hotel.html">Add Hotel </a><br>
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