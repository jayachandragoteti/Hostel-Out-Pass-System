<?php
//============================================================================
include "connect.php";
session_start();
if(!isset($_SESSION['admin'])){
    header('location:logout.php');
}
$sno=$_GET['q'];
$query="UPDATE `perpermissions_details` SET `status`='ACCEPTED'  WHERE `sno`= '$sno'";
$sql=mysqli_query($connect,$query);
if ($sql) {
    echo '<script>alert("Request Accepted")</script>';
	echo "<script>window.location='./requests.php';</script>";
}
else{
    echo '<script>alert("Failed Try Again")</script>';
	echo "<script>window.location='./requests.php';</script>";
}
//============================================================================
?>