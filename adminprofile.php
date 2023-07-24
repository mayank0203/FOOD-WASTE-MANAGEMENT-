<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.html"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="http://localhost/FoodWasteMgmt/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="stylecss.css" type="text/css">
    <style type='text/css'>
        img{
            background-image: url(img/DSC_5257+copy.png);
        }
    </style>
</head>
<body>
<div>

<div class="title">
<div class="img">
      <br/><br/>
    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="logout.php" class="adminbutton">Log Out</a></b></b><br/><br/><br/></div> 
</div>
</div>
       
<?php 
$username = "root"; 
$password = ""; 
$database = "food_waste_mgmt"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 

    $query = "SELECT * FROM collect_food WHERE pickup_done=0";
 
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $cid = $row["cid"]; 
        $name = $row["c_name"];
        $contact = $row["c_contact"];
        $address = $row["c_address"];
        $addtype = $row["c_addresstype"]; 
        $date = $row["c_date"]; 
        $time = $row["c_time"]; 
 
        echo ' <br/><br/><span class="heading_admin">NAME : </span><span class="data_admin">'.$name.'</span><br/>
               <span class="heading_admin">CONTACT : </span><span class="data_admin">'.$contact.'</span><br/>
               <span class="heading_admin">ADDRESS : </span><span class="data_admin">'.$address.'</span><br/>
               <span class="heading_admin">ADDRESS TYPE : </span><span class="data_admin">'.$addtype.'</span><br/>
               <span class="heading_admin">PICKUP DATE : </span><span class="data_admin">'.$date.'</span><br/>
               <span class="heading_admin">PICKUP TIME : </span><span class="data_admin">'.$time.'</span><br/><br/>
               <form action="updatedb.php" method="post" onclick="return confirm(\'Marked this picked up ?\');">
<input type="hidden" id="cid" name="cid" value='.$cid.'>
<input type="submit" value="PICKUP" name="PICKUP" class="btn btn-success">
</form>
<br/><br/><br/><br/></div> ';
        
    }
    $result->free();
} 
?>
</body>
</html>