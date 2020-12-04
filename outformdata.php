<?php
//============================================================================
include "connect.php";
session_start();
if(!isset($_SESSION['student'])){
    header('location:logout.php');
}
$rollnumber=$_SESSION['student'];
//============================================================================
$prmissiontype=$_POST['prmissiontype'];
$leavingdatetime=$_POST['leavingdatetime'];
$returndatetime=$_POST['returndatetime'];
$place=$_POST['place'];
$reason=$_POST['reason'];
$contacnumber=$_POST['contacnumber'];
$status="PENDING";
//============================================================================
$insert="INSERT INTO `perpermissions_details`(`rollnumber`, `prmissiontype`, `leavingdatetime`, `returndatetime`, `place`, `reason`, `contacnumber`, `status`) VALUES 
('$rollnumber','$prmissiontype','$leavingdatetime','$returndatetime','$place','$reason','$contacnumber','$status')";
$sql=mysqli_query($connect,$insert);
//============================================================================

if($sql) {
    echo '<script>alert("Out Pass Request Successfully Submited")</script>';
	echo "<script>window.location='./studentid.php';</script>";
}else{
    echo '<script>alert("Out Pass Request  is Faild")</script>';
	echo "<script>window.location='./outform.php';</script>";
}

?>