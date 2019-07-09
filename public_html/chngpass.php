<?php
include("connection.php");
$number=$_POST['ph'];
$old=$_POST['op'];
$query='SELECT * FROM `customer_details` WHERE `PASSWORD` = "'.$old.'" and `PHONE NUMBER` = "'.$number.'"';
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