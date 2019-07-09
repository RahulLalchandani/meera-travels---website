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



<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php
include("connection.php");

$result = Mysqli_query($con,"select * from hotels_booking where checkin > CURDATE() and CORN = 0");
echo "<center><h1>PENDING</h1><table class='table table-hover' style='width:80%;'>
    <thead>
      <tr>
        <th>destination</th>
        <th>checkin</th>
        <th>checkout</th>
<th>rooms</th>
<th>guest</th>
<th></th>
      </tr>
    </thead>
    <tbody></center>";

while($rows = Mysqli_fetch_assoc($result)){
      
      echo "<tr>
        <td>".$rows['destination']."</td>
        <td>".$rows['checkin']."</td>
        <td>".$rows['checkout']."</td>
        <td>".$rows['rooms']."</td>
        <td>".$rows['guest']."</td>
<td><a href='canclethebooking.php?id=".$rows['id']."'>CANCEL</a></td>
      </tr>";
}
echo "</tbody></table>";






$result = Mysqli_query($con,"select * from hotels_booking where checkin < CURDATE() and checkout > CURDATE() and CORN = 0");
echo "<h1>RUNNING</h1><center><table class='table table-hover' style='width:80%;'>
    <thead>
      <tr>
        <th>destination</th>
        <th>checkin</th>
        <th>checkout</th>
<th>rooms</th>
<th>guest</th>
<th></th>
      </tr>
    </thead>
    <tbody></center>";

while($rows = Mysqli_fetch_assoc($result)){
      
      echo "<tr>
        <td>".$rows['destination']."</td>
        <td>".$rows['checkin']."</td>
        <td>".$rows['checkout']."</td>
        <td>".$rows['rooms']."</td>
        <td>".$rows['guest']."</td>
      </tr>";
}
echo "</tbody></table>";






$result = Mysqli_query($con,"select *,CURDATE() as today from hotels_booking where checkout < CURDATE() and CORN = 0");
echo "<h1>COMPLETED</h1><center><table class='table table-hover' style='width:80%;'>
    <thead>
      <tr>
        <th>destination</th>
        <th>checkin</th>
        <th>checkout</th>
<th>rooms</th>
<th>guest</th>
<th></th>
      </tr>
    </thead>
    <tbody></center>";

while($rows = Mysqli_fetch_assoc($result)){
      
      echo "<tr>
        <td>".$rows['destination']."</td>
        <td>".$rows['checkin']."</td>
        <td>".$rows['checkout']."</td>
        <td>".$rows['rooms']."</td>
        <td>".$rows['guest']."</td>
      </tr>";
}
echo "</tbody></table>";



$result = Mysqli_query($con,"select * from hotels_booking where CORN = 1");
echo "<h1>CANCLED</h1><center><table class='table table-hover' style='width:80%;'>
    <thead>
      <tr>
        <th>destination</th>
        <th>checkin</th>
        <th>checkout</th>
<th>rooms</th>
<th>guest</th>
<th></th>
      </tr>
    </thead>
    <tbody></center>";

while($rows = Mysqli_fetch_assoc($result)){
      
      echo "<tr>
        <td>".$rows['destination']."</td>
        <td>".$rows['checkin']."</td>
        <td>".$rows['checkout']."</td>
        <td>".$rows['rooms']."</td>
        <td>".$rows['guest']."</td>
      </tr>";
}
echo "</tbody></table>";




?>













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