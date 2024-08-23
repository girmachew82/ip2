<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $id  = htmlspecialchars($_POST['id']);
    $comment  = htmlspecialchars($_POST['comment']);

    $sql = "UPDATE `comment` SET `comment`='$comment' WHERE id = '$id' ";
    if ($conn->query($sql)) {
      header("location:crud.php");
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
}
