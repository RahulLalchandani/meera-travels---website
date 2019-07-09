<?php
session_start();
include("connection.php");
$phone=$_POST['phone'];

$query='select * from customer_details where `PHONE NUMBER` ="'.$phone.'"';
//echo $query;
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if($count > 0){
echo "true";
}
?>