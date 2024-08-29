<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <a href="newUser.php">New User</a> | <a href ="searchUserForm.php">Search</a>
    <table border=2>
        <thead>
            <tr>
                <td>No</td>
                <th>First name</th>
                <th>Father Name</th>
                <th>Grandfather name</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
    <tbody>
    <?php
 
 $conn  = new mysqli('localhost','root','','hmsdb');
 $select = "SELECT user.*, role.name
FROM user 
INNER JOIN role ON role.id = user.role_id";
 $no = 1;
$select = $conn->query($select);

    while($row =  $select->fetch_assoc()){
        $id = $row['id'];
        ?>
        <tr>

           <td> <?php echo $no;?></td> 
           <td><?php echo $row['fname'];?></td>
           <td><?php echo $row['ffname'];?></td>
           <td><?php echo $row['gfname'];?></td>
           <td><?php echo $row['gender'];?></td>
           <td><?php echo $row['name'];?></td>
           <td><a href="updateUserForm.php?id=<?php echo $id?>">Update </a>| <a href ="deleteUser.php?id=<?php echo $id?>">Delete</a></td>
    </tr>
            <?php
    }

 ?>
 </tbody>
    </tbody>
    </table>
</body>
</html>