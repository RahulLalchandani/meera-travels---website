<?php
include("connection.php");

$cust_id = $_POST['cust_id'];
$destination = $_POST['destination'];
$checkin= $_POST['checkin'];
$checkout= $_POST['checkout'];
$rooms= $_POST['rooms'];
$guest= $_POST['guest'];

$query = "INSERT INTO `hotels_booking`(`cust_id`, `destination`, `checkin`, `checkout`, `rooms`, `guest`) VALUES ('".$cust_id."','".$destination."','".$checkin."','".$checkout."','".$rooms."','".$guest."')";
$result = Mysqli_query($con,$query);
echo $result;
?>