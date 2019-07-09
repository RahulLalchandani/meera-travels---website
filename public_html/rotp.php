<?php

session_start();
$number = $_SESSION['phone'];
include("connection.php");
$query="select * from VC where NUMBER='".$number."'";
//echo $query;
$result = mysqli_query($con, $query);
while ($rows=mysqli_fetch_assoc($result)){
$otp = $rows['OTP'];
}
$name = '';
$sms = "http://www.sms.static-codes.com/api/sms.php?uid=4d4545524154524156454c53&pin=05a68ec2d780b9cec65d86115efc3eb8&sender=MEERAT&route=5&tempid=2&mobile=$number&message=Dear%20$name,%20Your%20OTP%20is%20$otp.%20Thanks%20and%20Regards.%20Meera%20Travels&pushid=1";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $sms);
curl_exec($ch);
curl_close($ch);

echo "<script>window.location='otp.php';</script>";

?>