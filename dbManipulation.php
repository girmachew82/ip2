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
  //echo "Connected successfully";
     // Insert  statment 
     /*
    if(($_SERVER['REQUEST_METHOD']) === 'POST'){
    
        $data = htmlspecialchars($_POST['comment']);
       // $data = "Comment of today";
        $sql  = "INSERT INTO `comment`(`comment`) VALUES ('$data')";//string
        //echo "$sql";
        // To excute $sql string it need a method that called query($sql)
        if ($conn->query($sql) === TRUE) {
            echo "Comment saved successfully";
          } else {
            echo "Error creating database: " . $conn->error;
          }

    }
*/
     /// End of insert 
      /*
      SELECt 
          SELECT ALL     *  SELECT * FROM table_name
          SELECt all with specic columns  'SELECT colmn1, column2,.... FROM table_name
          SELECt from multiple table in the same database /// using join (inner, outer, left, right)
          OR
          write columns and tables 
          SELECt table1.column1,  table1.column2,table1.column3,
                  table2.column1,  table2.column2,table2.column3
                  FROM table1, table2
          To Select a specific row/s we need WHERE condition
          in Where clause we can use operators like = , !=,  >, < <=, >=, between, and , or , like

          Aggregate functions
            min()
            max()
            sum()
            avg()
            count()

            Sort 
              Ascending : ORDER BY column ASC
              Descending : ORDER BY column DESC

            Group
                GROUP BY column
           Subquery 

           Limit

      */
      ///SELECt statment
      // All valid WHERE statment can be applicable for update
    $sql = 'SELECT * FROM `comment`';//string
    $data = $conn->query($sql);
    if ($data->num_rows > 0) {
      // output data of each row
      while($row = $data->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Comment: " . $row["comment"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    /// End of SELECt  
  
  // Update query 
// All valid WHERE statment can be applicable for update
/*
$data  ="Comment Three";
$sql = "UPDATE `comment` SET `comment`='$data' WHERE id = 3 ";
if ($conn->query($sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
*/
  // End of update statment 
// Delete 
// All valid WHERE statment can be applicable for update

$sql = "DELETE FROM `comment` WHERE id = 27";
if ($conn->query($sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
 //End of Delete

}

?>

