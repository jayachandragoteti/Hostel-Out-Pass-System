<?php
//============================================================================
include "connect.php";
session_start();
if(!isset($_SESSION['security'])){
    header('location:logout.php');
}
date_default_timezone_set("Asia/Calcutta");
$checkout=date("Y-m-d h:i:sa");
//$checkout=date("F d, Y h:i:s A", $timestamp);


$sno=$_GET['q'];
$query="UPDATE `perpermissions_details` SET `outtime`='$checkout'  WHERE `sno`= '$sno' AND `outtime`=''";
$sql=mysqli_query($connect,$query);
if ($sql) {
   // echo '<script>alert("Check out successfully ")</script>';
	echo "<script>window.location='./security.php';</script>";
}
else{
  // echo '<script>alert("Check out  Failed Try Again")</script>';
	echo "<script>window.location='./security.php';</script>";
}
//============================================================================
?>