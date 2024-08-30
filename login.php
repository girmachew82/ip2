<?php
session_start();

 $conn  = new mysqli('localhost','root','','hmsdb');
 if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $username = htmlspecialchars($_POST['username']);// XSS
    $password = htmlspecialchars($_POST['password']);

    $select = "SELECT * FROM `user`  WHERE username = '$username' and password ='$password'";
    $data  = $conn->query($select);
    $fetch = $data->fetch_assoc();
    $role_id   = $fetch['role_id'];
    echo "$username, $password  $role_id";
    if($data->num_rows > 0){
       if($role_id  == 7){
        $_SESSION['username'] = $username;
        $_SESSION['role_id'] = $role_id;
        header("location:/ipII/adminDashboard.php");
        exit();
       }
    }else{
        header('location:/ipII/login.view.php?status=error');
    }
 }