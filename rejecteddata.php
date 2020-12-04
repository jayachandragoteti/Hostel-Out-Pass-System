<?php
//============================================================================
include "connect.php";
session_start();
if(!isset($_SESSION['admin'])){
    header('location:logout.php');
}
$sno=$_SESSION['id'];
$reason=$_POST['rejectreason'];
$query="UPDATE `perpermissions_details` SET `status`='$reason'  WHERE `sno`= '$sno'";
$sql=mysqli_query($connect,$query);
if ($sql) {
    echo '<script>alert("Request Rejected")</script>';
	echo "<script>window.location='./requests.php';</script>";
}
else{
    echo '<script>alert("Failed Try Again")</script>';
	echo "<script>window.location='./requests.php';</script>";
}
//============================================================================
?>