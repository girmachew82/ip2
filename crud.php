<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>

<a href="saveComment.php">New Comment</a> | <a href="searchForm.php">Search</a>
<br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ip2";
    // Create connection
    ?>
    <table style=" border: 1px solid; border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $conn = new mysqli($servername, $username, $password, $dbname);
         $sql = 'SELECT * FROM `comment`';//string
         $data = $conn->query($sql);
         if ($data->num_rows > 0) {
            $no =1;
            while($row = $data->fetch_assoc()) {
                $id = $row["id"];
                 echo "<tr>";
                 echo "<td> " . $no. " </td>";
                 echo "<td>". $row["comment"]. "</td>";
                 echo "<td> <a href='updateForm.php?id=$id'> Update </a>". "  <a href='delete.php?id=$id'> Delete </a>"."</td>";
                 echo "</tr>";
                 $no++;
               }
            }
            else{
                echo "<tr> <td colspan=3> No data </td></tr>";
            }
            ?>
        </tbody>
    </table>
   
        
</body>
</html>