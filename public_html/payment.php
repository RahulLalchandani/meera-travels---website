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
<link rel="stylesheet" href="css/hotel-list.css">
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
background:black;
width:80%;
}
}	

@media only screen and (max-width: 700px){

.formMobliefriend{
margin-top:12%;
background:black;
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
background:blue;
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
												
												

							<!--start of payment-->
													

  
<ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#credit">Credit Card</a></li>
  <li><a data-toggle="pill" href="#debit">Debit Card</a></li>
  <li><a data-toggle="pill" href="#wallet">Wallet</a></li>
  <li><a data-toggle="pill" href="#net">Net Banking</a></li>
</ul>

<div class="tab-content">
  
  <div id="credit" class="tab-pane fade in active">
    <form>
	<br>
       <br> 
      <br>
      <br>
        
        <Input type="Text" placeholder="Card Number" style="margin-right:25px"> 
	<Input type="Text" placeholder="Name on Card"><br><br>
	
	
	<font style="margin-right:135px">Valid Upto</font> <br>
	 <input type="number" style="margin-right:35px" placeholder="MM">
         <input type="number" style="margin-right:35px" placeholder="YYYY">  <br><br>
    
         <font style="margin-right:135px;width=50px;">Enter CVV</font> <br>
	 <input type="text" style="margin-right:35px;width:80px;" placeholder="CVV">  <br>
         
	 <input type="submit" style="margin-left:180px;color:white;background:red" value="Search Bus">
</form>
  </div>

  <div id="debit" class="tab-pane fade in active">
       <Input type="Text" placeholder="Card Number" style="margin-right:25px"> 
	<Input type="Text" placeholder="Name on Card"><br><br>
	
	
	<font style="margin-right:135px">Valid Upto</font> <br>
	 <input type="number" style="margin-right:35px" placeholder="MM">
         <input type="number" style="margin-right:35px" placeholder="YYYY">  <br><br>
    
         <font style="margin-right:135px;width=50px;">Enter CVV</font> <br>
	 <input type="text" style="margin-right:35px;width:80px;" placeholder="CVV">  <br>
         
	 <input type="submit" style="margin-left:180px;color:white;background:red" value="Search Bus">
  </div>
  
  <div id="wallet" class="tab-pane fade">
<img src="Images/paytm.png" style="width:80px;"><br>
<img src="Images/mobiwik.png" style="width:80px;"><br>

<img src="Images/freecharge.png" style="width:80px;"><br>
<img src="Images/jio.jpg" style="width:80px;"><br>    
  </div>
  
  <div id="net" class="tab-pane fade">
     </div>


</div>

    
	




                                                       <!--end of payment-->					
				
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

<a href="#">Address: </a><br>
<a href="#">Email </a><br>
<a href="#">Phone: </a><br>

</div>

<div style="float:left;margin-right:100px;margin-top:10px;">
<font size="3"><span class="fa fa-suitcase"></span>  For Suppliers</font><br><hr  style="border-color:black">


<a href="#">Add Hotel </a><br>
<a href="#">Add Packages</a><br>
<a href="#">Travel Agent</a><br>

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