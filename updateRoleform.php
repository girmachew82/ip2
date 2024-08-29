<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Update role</title>
</head>
<body>
    <?php {
        if($_GET['id']){
            $conn  = new mysqli('localhost','root','','hmsdb');
            $id = $_GET['id'];
            $select = "SELECT * FROM `role` WHERE id = '$id'";
            $select = $conn->query($select);

             $row =  $select->fetch_assoc();
             $name  = $row['name'];
                ?>

<form action="updateRole.php" method="post">
    <input type="hidden" value="<?php echo $id?>" name ="id"/>
            <input type="text" name ="role" value="<?php echo $name?>"/>
            <input type="submit" value="Update"/>

</form>
                <?php
        }
    }
?>
</body>
</html>