<?php 
session_start();
if($_SESSION['NumberVerified'] == 0){
echo "<script>window.location = 'otp.php'</script>";
}
if($_SESSION['username']){
echo "<script>window.location='login.php'</script>";
}
include ('connection.php');
$id=uniqid();
$name=$_POST["name"];
$name1=$_POST["name1"];
$email=$_POST["email"];
$password=$_POST["pwd"];
$password1=$_POST["pwd1"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$query='insert into `customer_details` values("'.$id.'","'.$name.'","'.$name1.'","'.$email.'","'.$password.'","'.$phone.'",0,"'.$gender.'","'.$address.'")';
echo $query;

$result = mysqli_query($con, $query);
if($result){
	$_SESSION['username'] = $name;
	$_SESSION['phone'] = $phone;
	$_SESSION['NumberVerified'] = 0;
$otp = rand(111111,999999);
$sql="INSERT INTO `VC`(`OTP`, `NUMBER`) VALUES ($otp,'$phone')";
$result = Mysqli_query($con,$sql);
//echo $result;
//echo $sql;

$sms = "http://www.sms.static-codes.com/api/sms.php?uid=4d4545524154524156454c53&pin=05a68ec2d780b9cec65d86115efc3eb8&sender=MEERAT&route=5&tempid=2&mobile=$phone&message=Dear%20$name,%20Your%20OTP%20is%20$otp.%20Thanks%20and%20Regards.%20Meera%20Travels&pushid=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $sms);
curl_exec($ch);
curl_close($ch);

echo "<script>window.location='otp.php';</script>";


}
?>