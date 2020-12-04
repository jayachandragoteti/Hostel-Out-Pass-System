<?PHP
 session_start();
 if(!isset($_SESSION['admin'])){
	header('location:logout.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Requests</title>
	<!--===============================================================================================-->
	<meta charset="UTF-8">
	<!--===============================================================================================-->
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	  <link rel="icon" type="image/png" href="images/logo.jpg"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--===============================================================================================-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--===============================================================================================-->
	<script src="./js/search.js"></script>
  </head>
  <!--===============================================================================================-->
  
  <style>
	html {
		position: relative;
		min-height: 100%;
	}
	
	body {
		padding-top: 4.5rem;
		margin-bottom: 4.5rem;
		background: linear-gradient(to left, #55A8FB  0%, white 100%);
	}
	#navbarCollapse a{
	  color: #fff;
	  
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  height: 3.5rem;
	  line-height: 3.5rem;
	  background-color:#2196f3;
	}
	
	.nav-link:hover {
	  transition: all 0.4s;
	}
	
	.nav-link-collapse:after {
	  float: right;
	  content: '\f067';
	  font-family: 'FontAwesome';
	}
	
	.nav-link-show:after {
	  float: right;
	  content: '\f068';
	  font-family: 'FontAwesome';
	}
	
	.nav-item ul.nav-second-level {
	  padding-left: 0;
	}
	
	.nav-item ul.nav-second-level > .nav-item {
	  padding-left: 20px;
	}
	
	@media (min-width: 992px) {
	  .sidenav {
		position: absolute;
		top: 0;
		left: 0;
		width: 230px;
		height: calc(100vh - 3.5rem);
		margin-top: 3.5rem;
		background:#2196f3;
		box-sizing: border-box;
		border-top: 1px solid rgba(0, 0, 0, 0.3);
	  }
	
	  .navbar-expand-lg .sidenav {
		flex-direction: column;
	  }
	
	  .content-wrapper {
		margin-left: 230px;
	  }
	
	  .footer {
		width: calc(100% - 230px);
		margin-left: 230px;
	  }
	}
	.active{
		background-color:#1565c0 ;
	}
		
	</style>
  
  <!--===============================================================================================-->
  <body>
  <!--===============================================================================================-->section>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background:#2196f3;">
	<a class="navbar-brand"  style="color: white;" href="#">E-Out Pass</a>
	<button
	  class="navbar-toggler"
	  type="button"
	  data-toggle="collapse"
	  data-target="#navbarCollapse"
	  aria-controls="navbarCollapse"
	  aria-expanded="false"
	  aria-label="Toggle navigation"
	>
	  <span class="navbar-toggler-icon"></span>
	</button>
  
	<div class="collapse navbar-collapse" id="navbarCollapse">
	  <ul class="navbar-nav mr-auto sidenav" id="navAccordion"  >
		  <br>
		<li class="nav-item ">
		  <a class="nav-link" href="requests.php" > &#128233; Requests<span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="accepts.php">  &#128505;  Accepts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="rejects.php"> &#128503; Rejects</a>
		  </li>
		<li class="nav-item active">
		  <a
			class="nav-link nav-link-collapse"
			href="#"
			id="hasSubItems"
			data-toggle="collapse"
			data-target="#collapseSubItems2"
			aria-controls="collapseSubItems2"
			aria-expanded="false"
		  > &#128202; Statistics            <big>⇩</big></a>
		  <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
			<li class="nav-item " style="background-color:#2196f3;">
			  <a class="nav-link" href="homestatustics.php">
				<span class="nav-link-text"> &#127968; Home Permissions</span>
			  </a>
			</li>
			<li class="nav-item" >
			  <a class="nav-link" href="onehourstatustics.php">
				<span class="nav-link-text"> &#127966; One Hour Permissions</span>
			  </a>
			</li>
		  </ul>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="studentregistration.php"> &#128221; Student Registration</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="studentdata.php">&#127891; Student Data</a>
		  </li>
	<!---	<li class="nav-item">
		  <a
			class="nav-link nav-link-collapse"
			href="#"
			id="hasSubItems"
			data-toggle="collapse"
			data-target="#collapseSubItems4"
			aria-controls="collapseSubItems4"
			aria-expanded="false"
		  >Item 4 </a>
		  <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">
			<li class="nav-item">
			  <a class="nav-link" href="#">
				<span class="nav-link-text">Item 4.1</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">
				<span class="nav-link-text">Item 4.2</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">
				<span class="nav-link-text">Item 4.2</span>
			  </a>
			</li>
		  </ul>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Item 5</a>
		</li>-->
	  </ul>
	  <form class="form-inline ml-auto mt-2 mt-md-0">
		<!--<input class="form-control mr-sm-2" type="text" id="myInput" onkeyup="myFunction()" placeholder=" Search &#128269;" aria-label="Search">--->
	  </form>
	  <a href="logout.php">Logout &#128473;</a>
	</div>
  </nav>
  
  <main class="content-wrapper">
<!--===================================================================================================================================================-->
<!--===================================================================================================================================================-->
<div>
	<h1 style="margin:-3% 0% 0% 0%;">One Hour Statustics:</h1>
</div>
<!---<?PHP
include "connect.php";
$query="SELECT COUNT(`rollnumber`) AS `total` FROM `student_details` ";
$sql=mysqli_query($connect,$query);
$row=mysqli_fetch_array($sql);
//===============================================================================SELECT DISTINCT(`rollnumber`) FROM `perpermissions_details` WHERE `outtime`!=''AND `intime`=''
$query2="SELECT COUNT(`rollnumber`) AS `total` FROM `perpermissions_details` WHERE (SELECT DISTINCT(`rollnumber`) FROM `perpermissions_details` WHERE `outtime`!=''AND `intime`='')";
$sql2=mysqli_query($connect,$query2);
?>
<div class="container">
  <div class="row">
    <div class="col">
			<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
			<div class="card-header">Total Students in Hostel</div>
 				<div class="card-body">
					<?PHP echo "<h1> ".$row['total']."</h1>";?>
				</div>
			</div>
    </div>
    <div class="col">
			<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
			<div class="card-header">Students  currently Present In hostel</div>
 				<div class="card-body">
						<?PHP
						if($row2=mysqli_fetch_array($sql2)){
							echo "<h1> ".$row2['total']."</h1>";
						}else{
							echo"0";
						}
						?>
				</div>
			</div>
    </div>
	<div class="col">
			<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
			<div class="card-header">Students In outing</div>
 				<div class="card-body">
				 <?PHP
						if($row2=mysqli_fetch_array($sql2)){
							echo "<h1> ".$row2['total']."</h1>";
						}else{
							echo"0";
						}
						?>
				</div>
			</div>
    </div>
  </div>
</div>
---->
<center>
	<div class="main">
		<div class="bar">
			<h2 class="h2">Students Info</h2>
		</div>
		<?PHP
			include 'connect.php';
			$sql = "SELECT `datm` FROM `perpermissions_details` WHERE `status`='ACCEPTED' AND  `prmissiontype`='onehourpermission'";
			$query = mysqli_query($connect,$sql);
			
			$curyear= date('Y');
			$curmonth= date('m');
			$curday= date('d');

			$yearcount=0;
			$monthcount=0;
			$daycount=0;


			while($row = mysqli_fetch_array($query)){
				$year = substr($row['datm'],0,4);
				$month = substr($row['datm'],5,2);
				$day = substr($row['datm'],8,2);

				if($year==$curyear)
				{
					$yearcount= $yearcount+1;
				}
				if($month==$curmonth)
				{
					$monthcount= $monthcount+1;
				}
				if($day==$curday)
				{
					$daycount= $daycount+1;
				}
				if($day==$curday-1)
				{
					$daycount=0;
				}
			}
		?>
		<div class="sub">
			<div class="card" id="card1"><b>Passes Issued<br>Today :</b><h1><?PHP echo $daycount;?></h1></div><br><br>
			<div class="card" id="card2"><b>Passes Issued<br>Monthly :</b><h1><?PHP echo $monthcount;?></h1></div><br><br>
			<div class="card" id="card3"><b>Passes Issued<br>Yearly :</b><h1><?PHP echo $yearcount;?></h1></div><br><br>
			
		</div>
	</div>
</center>
  </main>
  
 <!-- <footer class="footer">
	<div class="container">
		
	</div>
  </footer>-->
<!--===================================================================================================================================================-->
<!--===================================================================================================================================================-->
</section>
<script>
	$(document).ready(function() {
  $('.nav-link-collapse').on('click', function() {
    $('.nav-link-collapse').not(this).removeClass('nav-link-show');
    $(this).toggleClass('nav-link-show');
  });
});
</script>
</body>

</html>