<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role</title>
</head>
<body>
<?php require 'admin_nav.php'?>
<a href="SaveRole.php">New Role</a>
<table border=2> 
    <thead>
        <tr>
            <th>No</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
<tbody>
<?php
 
 $conn  = new mysqli('localhost','root','','hmsdb');
 $select = "SELECT * FROM `role`";
 $no = 1;
$select = $conn->query($select);

    while($row =  $select->fetch_assoc()){
        $id = $row['id'];
        ?>
        <tr>

           <td> <?php echo $no;?></td> 
           <td><?php echo $row['name'];?></td>
           <td><a href="updateRoleForm.php?id=<?php echo $id?>">Update </a>| <a href ="deleteRole.php?id=<?php echo $id?>">Delete</a></td>
    </tr>
            <?php
    }

 ?>
 </tbody>
 </table>
</body>
</html>