<?php
session_start();
$username;
$flag=0;
if($_SESSION['username']){
$username = $_SESSION['username'];
$flag=1;
}
?>
<H1>MEERA TRAVELS<H1>
<hr style="border:1px solid">
<table style="border:1px solid;" class="table">
<tr><th style="margin-right:50px">HOTEL</th><th>&nbsp;&nbsp;&nbsp;&nbsp;CHECK-IN</th><th>&nbsp;&nbsp;&nbsp;&nbsp;CHECK-OUT</th><th>&nbsp;&nbsp;&nbsp;&nbsp;NO ROOM</th><th>&nbsp;&nbsp;&nbsp;&nbsp;NO GUEST ROOM</th><th>&nbsp;&nbsp;&nbsp;&nbsp;PER NIGHT PRICE</th><th>&nbsp;&nbsp;&nbsp;&nbsp;TOTAL AMOUNT</th></tr>
<tr>
<td><h5 id="modalHotelName"></h5></td>
<td><h5 id="modalCheckInDate"></h5></td>
<td><h5 id="modalCheckOutDate"></h5></td>
<td><h5 id="modalNumOfRoom"></h5></td>
<td><h5 id="modalNumOfGuest"></h5></td>
<td><h5 id="modalHotelPrice"></h5></td>
<td><h5 id="modalTotalAmount"></h5></td>
</tr>
</table>