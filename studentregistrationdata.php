<?php
//============================================================================
include "connect.php";
session_start();
if(!isset($_SESSION['admin'])){
    header('location:logout.php');
   }
//============================================================================
$studentname=$_POST['studentname'];
$rollnumber=$_POST['rollnumber'];
$dateofbirth=$_POST['dateofbirth'];
$strem=$_POST['strem'];
$branch=$_POST['branch'];
$father_guardianname=$_POST['father_guardianname'];
$father_guardiannumber=$_POST['father_guardiannumber'];
$address=$_POST['address'];
$logintype="student";
//============================================================================
$query="INSERT INTO `student_details` (`studentname`, `rollnumber`, `dateofbirth`, `stream`, `branch`, `father/guardianname`, `father/guardiannumber`, `address`)VALUES ('$studentname','$rollnumber','$dateofbirth','$strem','$branch','$father_guardianname','$father_guardiannumber','$address')";
$sql=mysqli_query($connect,$query);
if($sql) {
   $loginquery="INSERT INTO `login`(`username`, `password`, `logintype`) VALUES ('$rollnumber','$rollnumber','$logintype')";
   $loginsql=mysqli_query($connect,$loginquery);
                if ($loginsql) {
                    echo '<script>alert("Registed Successfully")</script>';
                    echo "<script>window.location='./studentregistration.php';</script>";
                }else{
                    echo '<script>alert("User Name and password are not updated")</script>';
                   echo "<script>window.location='./studentregistration.php';</script>";
                }
}else{
    echo '<script>alert("Registration Faild try again")</script>';
	echo "<script>window.location='./studentregistration.php';</script>";
}
//============================================================================
?>