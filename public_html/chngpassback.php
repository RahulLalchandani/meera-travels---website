<?php
include("connection.php");
$number=$_POST['ph'];
$vc = $_POST['otp'];

$query='SELECT * FROM `VC` WHERE `NUMBER` = "'.$number.'" and `OTP` = "'.$vc.'" ';
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if($count > 0){
$password=$_POST["cpass"];
$query1='UPDATE `customer_details` SET `PASSWORD` = "'.$password.'" WHERE `PHONE NUMBER` ="'.$number.'"';
$result = mysqli_query($con,$query1);
if($result){
echo "SUCCEFULLY UPDATED";
echo '<script>window.location = "ch_successfully.php";</script>';
}
}
?>