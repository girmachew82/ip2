<?php
if($_GET['id']){
    $conn  = new mysqli('localhost','root','','hmsdb');
    $id  = $_GET['id'];
    $select = "SELECT * FROM `user` WHERE role_id = '$id'";
    $data = $conn->query($select);
    if ($data->num_rows > 0) {
    echo "You can not delete this role";
    }else{
    $delete = "DELETE  FROM `role` WHERE id = '$id'";
    if($conn->query($delete)){
       // echo "Deleted";
        header('location:role.php');
    }else{
        echo $conn->connect_error;
    }
}
}