<html lang="en">
<?php 
session_start();
if(isset($_SESSION['username'])){
$now = time(); // Checking the time now when home page starts.

        if ($now > $_SESSION['expire']) {
            session_destroy();
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

<head>
  <link rel="stylesheet" href="css/font-awesome.min.css ">
  <title>Meera Travels</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/hotel-list.css">
<link rel="icon" type="image/x-icon" href="Images/icon.png">
<script>
function checkOutSummary(flightname,price,duration,departure,arrival){
var checkforlogin = "<?php echo $flag;?>";
//alert(checkforlogin);
if(checkforlogin == 1){ 
 
//var departure = "<?php echo $_POST['depart'];?>";
//var arrival = "<?php echo $_POST['arr'];?>";
var ticket = "<?php echo $_POST['ticket'];?>";

document.getElementById("modalFlightName").innerHTML = flightname;
document.getElementById("modalDeparture").innerHTML = departure;
document.getElementById("modalArrival").innerHTML = arrival;
document.getElementById("modalDuration").innerHTML = duration;
document.getElementById("modalTicket").innerHTML = ticket;
document.getElementById("modalPrice").innerHTML = price;
var total = parseInt(ticket) * parseInt(price);
document.getElementById("modalTotalAmount").innerHTML = total;
var i;  
//alert(checkindate);
$('#bookingSummary').modal('show')
}
else{
$('#loginSignup').modal('show');
}
}
function print(){
var a = $("#orderinfo").html();
var header = "<center><h1>INVOICE</h1><hr><br><h2>MEERA TRAVELS</h2></center><br><h3><u> Address </u></h3> <p>Shop No.217,Mat Mandir,Main Bazar,Ulhasnagar, Kailash Colony, Mumbai, Maharashtra 421005</p> <h3><u> Call Us </u></h3> 0251 252 8058 /9324093395 <h3><u> Email </u></h3> meeraholidayin@gmail.com";
var footer ="<hr/><h4 align=right>Regards<br> MEERA TRAVELS</h4></hr>";


var printfile = window.open('', 'PRINT', 'height=400,width=600');
printfile.document.write(header + a + footer);
printfile.print();
mywindow.focus();
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
	  <a id="MYACCOUNT" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo $username; ?> <span class="caret"></span> </a> 
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

												<!--start of flights-->
<div style="background-color: rgb(235,242,247)";>
<div class="container pd-tp-10">
<?php
include ('connection.php');
$depart=$_POST['depart'];
$arr=$_POST['arr'];
$query='SELECT * FROM flights WHERE FDEPART LIKE "%'.$depart.'%" AND FARRIVAL LIKE "%'.$arr.'%"' ;
$result=mysqli_query($con, $query);
while ($rows=mysqli_fetch_assoc($result))
{
$services_icons = '';

$services = $rows['FSERVICES'];

$service_items = str_split($services);
if($service_items[0] == '1'){
$services_icons = $services_icons.'<span class="fa fa-heartbeat">&nbsp;</span>';	
}
if($service_items[1] == '1'){
$services_icons = $services_icons.'<span class="fa fa-wifi">&nbsp;</span>';	
}
if($service_items[2] == '1'){
$services_icons = $services_icons.'<span class="fa fa-cutlery">&nbsp;</span>';
}
if($service_items[3] == '1'){
$services_icons = $services_icons.'<span class="fa fa-beer">&nbsp;</span>';
}

$img = $rows['FIMAGE'];
$depart = $rows['FDEPART'];
$arr = $rows['FARRIVAL'];
$fname = $rows['FNAME'];
$fprice = $rows['FPRICE'];
$duration = $rows['FDURATION'];
$ticket = $rows['FTICKETS'];
echo 
'<div class="hotel-list">
             <div>
               <img src='.$img.' class="hotel-item-img">
             </div>

             <div class="hotel-item-info">
                <h3 class="info-hotel-name">'.$fname.'</h3>
  <table style="width:100%">
  <tr>
    <th>Departure</th>
    <th>Arrival</th> 
    <th>Duration</th>
 </tr>
  <tr>
    <td>'.$depart.'</td>
    <td>'.$arr.'</td> 
    <td>'.$duration.'</td>
  </tr>
 
</table>
                <p class=""></p>
                <span class="fa-fa-heart" title="heart">
                <span class="fa fa-wifi"></span>
                <span class="fa fa-heart"></span>
                <span class="fa fa-cutlery"></span>
             </div>
<br>
            <div class="hotel-item-button">
                <p class="button-start-p">Starting From</p>
                <h3 class="button-price"><span class="fa fa-inr"></span>'.$fprice.'/-</h3>
                
                <button class="btn button-color" onClick = "checkOutSummary(\''.$fname.'\',\''.$fprice.'\',\''.$duration.'\',\''.$depart.'\',\''.$arr.'\')">Select Flights</button>
          </div>
    </div>';
}
?>

</div>
</div>
												
												
												
												<!--end of flights-->
	<!-- start of modal-->


<!-- Modal HTML Markup -->
<div id="loginSignup" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">See more of this awesome website by logging in</h4>
            </div>
            <div class="modal-body">
                <p class="lead text-xs-center">It only takes a few seconds to level up!</p>
                <div class="lead text-xs-center"><a class="btn btn-info" href="signup.php">Sign Up</a> or
                    <a class="btn btn-success" href="rlogin.php">Login</a></div>
            </div>
            <div class="modal-footer">
                :-)
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
  <div class="modal fade" id="bookingSummary" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CONFIRM YOUR BOOKING</h4>
        </div>
        <div class="modal-body">
<div id = "orderinfo" >
<table style="border: 1px solid;text-align:left;padding:8px;" class="table">
<tr><th style="border: 1px solid;text-align:left;padding:8px;">FLIGHT</th><th style="border: 1px solid;text-align:left;padding:8px;">DEPARTURE</th><th style="border: 1px solid;text-align:left;padding:8px;">ARRIVAL</th><th style="border: 1px solid;text-align:left;padding:8px;">DURATION</th><th style="border: 1px solid;text-align:left;padding:8px;">No. of Tickets</th><th style="border: 1px solid;text-align:left;padding:8px;">PRICE</th><th style="border: 1px solid;text-align:left;padding:8px;">TOTAL AMOUNT</th></tr>
<tr>
<td style="border: 1px solid;text-align:left;padding:8px;"><h5 id="modalFlightName"></h5></td>
<td style="border: 1px solid;text-align:left;padding:8px;"><h5 id="modalDeparture"></h5></td>
<td style="border: 1px solid;text-align:left;padding:8px;"><h5 id="modalArrival"></h5></td>
<td style="border: 1px solid;text-align:left;padding:8px;"><h5 id="modalDuration"></h5></td>
<td style="border: 1px solid;text-align:left;padding:8px;"><h5 id="modalTicket"></h5></td>
<td style="border: 1px solid;text-align:left;padding:8px;"><h5 id="modalPrice"></h5></td>
<td style="border: 1px solid;text-align:left;padding:8px;"><h5 id="modalTotalAmount"></h5></td>
</tr>
</table>
<div id="custdetails">
<!--<form>
1.<input type=text placeholder="Enter First Name">&nbsp;<input type=text placeholder="Enter Last Name">&nbsp;<input type=number placeholder="Enter Age"><br><br>
2.<input type=text placeholder="Enter First Name">&nbsp;<input type=text placeholder="Enter Last Name">&nbsp;<input type=number placeholder="Enter Age"><br><br>
3.<input type=text placeholder="Enter First Name">&nbsp;<input type=text placeholder="Enter Last Name">&nbsp;<input type=number placeholder="Enter Age"><br><br>
4.<input type=text placeholder="Enter First Name">&nbsp;<input type=text placeholder="Enter Last Name">&nbsp;<input type=number placeholder="Enter Age"><br><br>
5.<input type=text placeholder="Enter First Name">&nbsp;<input type=text placeholder="Enter Last Name">&nbsp;<input type=number placeholder="Enter Age">
</form>-->
</div>
</div>
        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" onclick="print();"><a href="confirmation.php"> Confirm  & Print</a></button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
        <!--stop of modal-->											
				
  												<!-- footer start-->
														
														
<div style="background-color: rgb(235,242,247);margin-top:500px;">
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