<?php
session_start();
include("connection.php");
$phone=$_POST['phone'];

$query='select * from customer_details where `PHONE NUMBER` ="'.$phone.'"';
//echo $query;
$result = mysqli_query($con, $query);
$count = mysqli_num_rows($result);
if($count > 0){
while ($rows=mysqli_fetch_assoc($result)){
$email = $rows['EMAIL'];
}

$otp = rand(111111,999999);
$sql="INSERT INTO `VC`(`OTP`, `NUMBER`) VALUES ($otp,'$phone')";
$result = Mysqli_query($con,$sql);
$sms = "http://www.sms.static-codes.com/api/sms.php?uid=4d4545524154524156454c53&pin=05a68ec2d780b9cec65d86115efc3eb8&sender=MEERAT&route=5&tempid=2&mobile=$phone&message=Dear+$email%2C+Your+OTP+is+$otp+.+OTP+expires+in+2+hours+%26+please+do+not+share+it+with+anyone+for+security+reasons&pushid=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $sms);
curl_exec($ch);
curl_close($ch);

echo "true";
}
?>