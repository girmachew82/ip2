<?php
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $conn  = new mysqli('localhost','root','','hmsdb');
    $id  = $_POST['id'];
    $role  =$_POST['role'];
    $update = "UPDATE `role` SET `name`='$role' WHERE id = '$id'";
    if($conn->query($update)){
        header('location:role.php');
    }else{
        echo $conn->connect_error;
    }
}