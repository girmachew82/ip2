<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
//if($_SERVER['REQUEST_METHOD'] ==='POST'){
if($_GET['id']){
    $id = htmlspecialchars($_GET['id']);
    $sql = "DELETE FROM `comment` WHERE id = $id";
        if ($conn->query($sql)) {
        //echo "Record deleted successfully";
        header("location:crud.php");
        } else {
        echo "Error deleting record: " . mysqli_error($conn);
        }
}
}