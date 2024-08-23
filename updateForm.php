<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
  <!---
    <form action="" method="post">
        <input type="number" name="id">
        <br>
        <input type="submit" value ="select" name="select">
    </form>
    --->
    <?php

    if(isset($_GET['id'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ip2";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $id = htmlspecialchars($_GET['id']);
        $sql = "SELECT * FROM `comment` WHERE id = '$id'";//string
        $data = $conn->query($sql);
        if ($data->num_rows > 0) {
          // output data of each row
                  $row = $data->fetch_assoc();
                  ?>
                  <form action ="update.php" method ="POST">
                    <input type="hidden" value="<?php echo $row["id"]?>" name="id" >
                    <textarea name="comment"><?php echo $row["comment"]   ?></textarea> 
                    <br>
                        <input type  ="submit" value="Update" name="update">
                     </form>
                    <?php

 
        } else {
          echo "0 results";
    }
    }
?>

</body>
</html>