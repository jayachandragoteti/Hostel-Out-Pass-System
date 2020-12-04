<?PHP
 session_start();
 if(!isset($_SESSION['admin'])){
	header('location:logout.php');
 }
 $_SESSION['id']=$_GET['q'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>empty</title>
	<meta charset="UTF-8">
<!--===============================================================================================-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/airamlogo.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--===============================================================================================-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--===============================================================================================-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<!--===============================================================================================-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<!--===============================================================================================-->

<style>

    
</style>
<!--===================================================================================================================================================-->
</head>
<!--===================================================================================================================================================-->
<body class="container-login100" style="background-image: url('images/aitam ablock.jpg');">
<!--===================================================================================================================================================-->
<!--===================================================================================================================================================-->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/aitam ablock.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="rejecteddata.php" method="POST" >

					<div class="login100-form-avatar">
						<img src="images/logo.jpg" alt="logo">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Reject Reason
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" required>
						<input class="input100" type="text" name="rejectreason" placeholder="Reject Reason">
					</div>
			
					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--===================================================================================================================================================-->

<!--===================================================================================================================================================-->
</body>
</html>