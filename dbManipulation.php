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
    if(($_SERVER['REQUEST_METHOD']) === 'POST'){
    //echo "Connected successfully";
     $data = "Comment four";
    $sql  = "INSERT INTO `comment`(`comment`) VALUES ('$data')";
    //echo "$sql";
    if ($conn->query($sql) === TRUE) {
        echo "Comment saved successfully";
      } else {
        echo "Error creating database: " . $conn->error;
      }
    }
     

    $sql = 'SELECT * FROM `comment` WHERE id < 20 ORDER BY id DESC';
    $data = $conn->query($sql);
    if ($data->num_rows > 0) {
      // output data of each row
      while($row = $data->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Comment: " . $row["comment"]. "<br>";
      }
    } else {
      echo "0 results";
    }

  /*
$data  ="Comment Three";
$sql = "UPDATE `comment` SET `comment`='$data' WHERE id = 3 ";
if ($conn->query($sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
  */
/*
$sql = "DELETE FROM `comment` WHERE id BETWEEN 4 and 8";
if ($conn->query($sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
  */

}

?>

