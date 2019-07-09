<?php 
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
$id=uniqid();
$hname=$_POST["hname"];
$hlocation=$_POST["hlocation"];
$hrating=$_POST["hrating"];
//$himage=$_POST["himage"];
$hservices=$_POST["hservices"];
$hprice=$_POST["hprice"];
$hrooms=$_POST["hrooms"];
$hguests=$_POST["hguests"];
$query='INSERT INTO `hotels`(`HNAME`, `HLOCATION`, `HRATING`, `HIMAGE`, `HSERVICES`, `HPRICE`, `HROOMS`, `HGUEST`) values("'.$hname.'","'.$hlocation.'","'.$hrating.'","'.$target_file.'","'.$hservices.'","'.$hprice.'","'.$hrooms.'","'.$hguests.'")';
echo $query;
include("connection.php");
$result = mysqli_query($con,$query);
echo $result;
?>