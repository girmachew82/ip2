<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    if(isset($_GET['status']))
    {
        echo "Username or password is wrong";
    }
    ?>
    <form action="login.php" method="post">
        <input type="text" name="username" id="" placeholder="Enter username">
        <br>
        <input type="password" name="password" placeholder="enter password">
        <br/>
        <input type="submit" value="login"/>
    </form>
</body>
</html>