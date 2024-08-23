<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ip2";

$conn = new mysqli($servername, $username, $password, $dbname);

  //echo "Connected successfully";
     // Insert  statment 
    if(($_SERVER['REQUEST_METHOD']) === 'POST'){
    
        $data = htmlspecialchars($_POST['comment']);
       // $data = "Comment of today";
        $sql  = "INSERT INTO `comment`(`comment`) VALUES ('$data')";//string
        //echo "$sql";
        // To excute $sql string it need a method that called query($sql)
        if ($conn->query($sql) === TRUE) {
          
                header('location: crud.php'); 

          } else {
            echo "Error creating database: " . $conn->error;
          }

    }