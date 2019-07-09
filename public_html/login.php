<?php
session_start();
include("connection.php");
$email=$_POST['email'];
$password=$_POST['pwd'];

$query='select * from customer_details where email="'.$email.'" AND password="'.$password.'"';
$result = mysqli_query($con, $query);
$name = "";
$NumberV = ""; 
$phone = "";
$count = mysqli_num_rows($result);
if($count > 0){

while ($rows=mysqli_fetch_assoc($result)){
$name = $rows['FIRST NAME'];
$NumberV =$rows['numberVaildation'];
$phone = $rows['PHONE NUMBER'];
}

	echo "true";
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
	$_SESSION['username'] = $name;
$_SESSION['phone'] = $phone;
$_SESSION['NumberVerified'] = $NumberV;
 //echo $_SESSION['NumberVerfied'];
//	echo "<script>window.location='index.html';</script>";
}
else{
	//echo "false";
}
?>