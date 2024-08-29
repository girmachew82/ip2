<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Comment </title>
</head>
<body>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hmsdb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        if(($_SERVER['REQUEST_METHOD']) === 'POST'){
            $data =  htmlspecialchars($_POST['search']);
            $sql  = " SELECT * FROM `user` WHERE fname LIKE '%$data%' OR ffname LIKE '%$data%' OR gfname LIKE '%$data%' OR gender  LIKE '%$data%' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo $row['fname']." ".$row['ffname']," ".$row['gfname']."<br>";
                }
            } else {
                echo "Not found";
            }
        }

    ?>
    <a href="user.php">All</a>
    <form action="" method="post" enctype="multipart/form-data">
        <textarea name="search" id=""></textarea>
        <br>

        <button type="submit">Search</button>
    </form>
</body>
</html>