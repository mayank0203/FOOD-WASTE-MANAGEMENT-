<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: adminprofile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="bootstrap.css" rel="stylesheet">
<link href="stylecss.css" rel="stylesheet">
<link href="http://localhost/FoodWasteMgmt/style.css" rel="stylesheet"> 
    </head>
<body>
<div class="pic"><br/><center><img src="img/food-waste-challenges-solutions.jpg" width="80%"></center>
       <a  class="btn btn-primary" href="http://localhost/FoodWasteMgmt/index.html" target="_self">HOME</a>
      <br/><br/><br/></div> <br/><br/><br/>
    <div id="login">
<h2>Admin Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text" style="btn btn-primary"><br>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password" style="btn btn-primary"><br><br>
<input name="submit" type="submit" value=" Login " style="btn btn-danger">
<span><?php echo $error; ?></span>
</form>
</body>
</html>