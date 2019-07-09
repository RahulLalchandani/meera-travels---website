<?php
session_start();
$otp =  $_POST['otp'];
$phone = $_SESSION['phone']; 

include("connection.php");
$sql = "select * from `VC` where otp = $otp and number = '$phone'";
$result  = Mysqli_query($con, $sql);
//echo $sql;
//echo Mysqli_num_rows($result);
if(Mysqli_num_rows($result) > 0){
$_SESSION['NumberVerified'] = 1;
$sql = "UPDATE `customer_details` SET `numberVaildation`= 1 WHERE `PHONE NUMBER` = '$phone'";
//echo $sql;
$result = Mysqli_query($con,$sql);
echo "<script>window.location ='index.php'</script>";
}
?>