<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "food_waste_mgmt");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$cid = mysqli_real_escape_string($conn, $_REQUEST['cid']);

$sql = "UPDATE collect_food SET pickup_done='1' WHERE cid='$cid'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('location: adminprofile.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>