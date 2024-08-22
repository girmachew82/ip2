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
            $data =  $_POST['comment'];
            $sql  = "INSERT INTO `comment`(`comment`) VALUES ('$data')";
            //echo "$sql";
            if ($conn->query($sql) === TRUE) {
                echo "Comment saved successfully";
            } else {
                echo "Error creating database: " . $conn->error;
            }
        }

    ?>
    <form action="" method="post">
        <textarea name="comment" id=""></textarea>
        <button type="submit">Save</button>
    </form>
</body>
</html>