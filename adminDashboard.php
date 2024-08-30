<?php
session_start();
if($_SESSION['role_id'] == 7){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
<?php require 'admin_nav.php'?>
</body>
</html>
<?php
}else{
    header("location:/ipII/login.view.php");
    exit();
}