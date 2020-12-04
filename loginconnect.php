<?php
//============================================================================
include "connect.php";
session_start();
//============================================================================
$username=$_POST['username'];
$password=$_POST['password'];
//============================================================================
$query="SELECT `logintype` FROM `login` WHERE `username` = '$username' AND `password`='$password'";
$sql=mysqli_query($connect,$query);
$row= mysqli_fetch_array($sql);
//============================================================================
if($sql){

			if ($row['logintype']=="security") {

				$_SESSION['security']=$username;
				echo "<script>window.location='./security.php';</script>";

			}
			elseif ($row['logintype']=="admin") {

				$_SESSION['admin']=$username;
				echo "<script>window.location='./requests.php';</script>";

			}elseif ($row['logintype']=="student") {
				$_SESSION['student']=$username;
				echo "<script>window.location='./outform.php';</script>";

			}else {

				echo '<script>alert(" Details Wrong")</script>';
				echo "<script>window.location='./login.html';</script>";

			}

}else{
	echo '<script>alert(" Details Wrong")</script>';
	echo "<script>window.location='./login.html';</script>";
}
//============================================================================
?>