<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <?php
    if($_GET['id']){
        $conn  = new mysqli('localhost','root','','hmsdb');
        $id = $_GET['id'];
        $select = "SELECT user.*, role.name
FROM user 
INNER JOIN role ON role.id = user.role_id WHERE user.id = '$id'";
        $select = $conn->query($select);

         $row =  $select->fetch_assoc();
         $fname  = $row['fname'];
         $ffname  = $row['ffname'];
         $gfname  = $row['gfname'];
         $gender  = $row['gender'];
         $name  = $row['name'];
    ?>
    <form action="updateUser.php" method="post">
    <input type="hidden" name="id"  value="<?php echo $id?>">
    
        <label for="fname">First name</label>
<input type="text" name="fname" id="" placeholder="Enter first name" value="<?php echo $fname?>">
<br>
<label for="ffname">Father name</label>
<input type="text" name="ffname" id="" value="<?php echo $ffname?>">
<br>
<label for="gfname">Grandfather name</label>
<input type="text" name="gfname" id="" value="<?php echo $gfname?>">
<br>
<label for="male">Male</label>
<input type="radio" name="gender" id="" value="male" <?php echo $gender ==='male'? 'checked':''?> >
<label for="female"></label>Female
<input type="radio" name="gender" id="" value="female" <?php echo $gender ==='female'? 'checked':''?>>

<br>
<select name="role_id" required>
<option value=""><?php echo $name?></option>

    <option value=""> Select role</option>
<?php
 
 $conn  = new mysqli('localhost','root','','hmsdb');
 $select = "SELECT * FROM `role`";
 $no = 1;
$select = $conn->query($select);

    while($row =  $select->fetch_assoc()){
        $id = $row['id'];
        ?>
          <option value="<?php echo $id?>"> <?php echo $row['name'];?></option> 

            <?php
    }
    }
 ?>
</select>
<br>
<input type="submit" value="Update"/>
    </form>
</body>
</html>