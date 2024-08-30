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
        $username  = "hms".rand(1,1000);
        $password = $fname.rand(1,500);
        
       // $data = "Comment of today";
        $sql  = "INSERT INTO `user`( `fname`, `ffname`, `gfname`, `gender`, `role_id`,`username`,`password`) 
        VALUES ('$fname','$ffname','$gfname','$gender','$role_id', '$username', '$password')";//string
        //echo "$sql";
        // To excute $sql string it need a method that called query($sql)
        if ($conn->query($sql) === TRUE) {
          /*
          $userId  = "SELECT id FROM `user` ORDER BY id DESC LIMIT 1";
          $userID = $conn->query($userId);
          $fetch = $conn->fetch_assoc();
          $id  = $fetch['id'];
          $username = "hms".$id;
          $updateAuth = "UPDATE `user` SET `username`='[value-7]',`password`='[value-8]' WHERE id =$id";
          $conn->query($updateAuth);
          */
             /// echo "Inserted";
          header('location: user.php'); 

          } else {
            echo "Error creating database: " . $conn->error;
          }

    }