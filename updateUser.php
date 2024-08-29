<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hmsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

  //echo "Connected successfully";
     // Insert  statment 
    if(($_SERVER['REQUEST_METHOD']) === 'POST'){
    
        $fname = htmlspecialchars($_POST['fname']);
        $ffname = htmlspecialchars($_POST['ffname']);
        $gfname = htmlspecialchars($_POST['gfname']);
        $gender = htmlspecialchars($_POST['gender']);
        $role_id  = $_POST['role_id'];
        $id  = $_POST['id'];
       // $data = "Comment of today";
        $sql  = "UPDATE  `user` SET  `fname` ='$fname', `ffname` ='$ffname', `gfname` ='$gfname', `gender` ='$gender', `role_id` ='$role_id' WHERE id='$id'";//string
        //echo "$sql";
        // To excute $sql string it need a method that called query($sql)
        if ($conn->query($sql) === TRUE) {
              //echo "Updated";
                header('location: user.php'); 

          } else {
            echo "Error creating database: " . $conn->error;
          }

    }