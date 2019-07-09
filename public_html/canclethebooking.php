<?php
$id = $_GET['id'];
include("connection.php");
$query = "update hotels_booking set CORN = 1 where id = ".$id;
$result = Mysqli_query($con,$query);
echo $query;
echo $result;
echo "SUCCESSFULLY CANCLED";
echo "<a href='mybookings.php'>GO BACK</a>";
?>