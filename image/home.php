<!DOCTYPE html>
<html>
<head>
<title>Signup!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-green">
<div class="w3-row w3-padding-128">
<div class="w3-container">
<div class="w3-container w3-quarter">
</div>
   <div class="w3-container w3-half w3-white">
<h2>Sign up</h2>
<hr class="w3-clear">
<form class="w3-container" method="post" action="test-process.php" enctype="multipart/form-data">
  <p><input class="w3-input w3-border" type="text" placeholder="First Name"  name="firstname"></p>
  <p><input class="w3-input w3-border" type="text" placeholder="Last Name"  name="lastname"></p>
  <input type="checkbox" name="opt[]" value="A">:A <br>
<input type="checkbox" name="opt[]" value="B">:B <br>
<input type="checkbox" name="opt[]" value="C">:C<br><br> 
<label>Upload your image</label>
  <p><input type="file" name="image"></p>
<label>Upload your file</label>

<p><input type="file" name="file" /> </p>
  <p class="w3-center"><button class="w3-btn w3-green">Sign Up</button></p>
   </form>
<br>
</div>
<div class="w3-quarter">
</div>
</body>
</html> 
