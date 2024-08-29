<?php
$conn  = new mysqli('localhost','root','','hmsdb');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $role  = $_POST['role'];
        $insert  = "INSERT INTO `role`(`name`) VALUES ('$role')";
        if($conn->query($insert)){
            //echo "Inserted successfully";
            header('location:role.php');
        }else{
            echo $conn->connect_error;
        }
    }
?>