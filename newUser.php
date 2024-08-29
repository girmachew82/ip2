<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <form action="insertUser.php" method="post">
        <label for="fname">First name</label>
<input type="text" name="fname" id="" placeholder="Enter first name" required title="first name must be character"  pattern [a-zA-Z]>
<br>
<label for="ffname">Father name</label>
<input type="text" name="ffname" id="" required>
<br>
<label for="gfname">Grandfather name</label>
<input type="text" name="gfname" id="" required>
<br>
<label for="male">Male</label>
<input type="radio" name="gender" id="" value="male" required>
<label for="female"></label>Female
<input type="radio" name="gender" id="" value="female" required>

<br>
<select name="role_id" required>
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

 ?>
</select>
<br>
<input type="submit" value="Save"/>
    </form>
</body>
</html>