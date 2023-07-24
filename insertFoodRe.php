<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "food_waste_mgmt");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$contact = mysqli_real_escape_string($link, $_REQUEST['contact']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$add_type = mysqli_real_escape_string($link, $_REQUEST['add_type']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$pickup_time= mysqli_real_escape_string($link, $_REQUEST['pickup_time']);
 
// Attempt insert query execution

$sql = "INSERT INTO `collect_food` (`cid`, `c_name`, `c_contact`, `c_address`, `c_addresstype`, `c_date`, `c_time`,`pickup_done`) VALUES (null, '$name', '$contact', '$address', '$add_type', '$date', '$pickup_time', 0)";

if(mysqli_query($link, $sql)){
 header("Location:http://localhost/FoodWasteMgmt/submitted.html");

} else{
  echo '<script language="javascript">';
echo 'alert("DB Error")';
echo '</script>';  
}
 
// Close connection
mysqli_close($link);
?>