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
$dbname = "ip2";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
        if(($_SERVER['REQUEST_METHOD']) === 'POST'){
            $data =  htmlspecialchars($_POST['comment']);
            $sql  = " SELECT * FROM `comment` WHERE comment LIKE '%$data%'; ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo $row['comment']."<br>";
                }
            } else {
                echo "Error creating database";
            }
        }

    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <textarea name="comment" id=""></textarea>
        <br>

        <button type="submit">Search</button>
    </form>
</body>
</html>