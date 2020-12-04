  <?PHP 
 include 'connect.php';
 session_start();
 if(!isset($_SESSION['student'])){
  header('location:logout.php');
 }
		 
 		$username=$_SESSION['student'];
		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['newpassword'];	
		$confirmpassword=$_POST['confirmpassword'];	
		$query="SELECT * FROM `login`  WHERE `username`='$username'";
		$sql=mysqli_query($connect,$query);
		$row=mysqli_fetch_array($sql);
		if($row['password']==$oldpassword){

			if($newpassword==$confirmpassword)
			{
				$query="UPDATE `login` SET `password`='$newpassword' WHERE `username`='$username' ";
				$sql=mysqli_query($connect,$query);
				if($sql)
				{	
					
					echo "<script>alert('Password Updated(Login again)');</script>";
					echo "<script>window.location='logout.php';</script>";
				}else{
					echo "<script>alert('Password Cant Update')</script>";
					echo "<script>window.location='changepassword.php';</script>";
				}	
			}else{
				echo "<script>alert(' New And Confirm Password should be same')</script>";
					echo "<script>window.location='changepassword.php';</script>";
			}
			
		}
	
?>