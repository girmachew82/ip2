<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
    <h1>Customers Orders </h1>
    <p><a href="form.php">Add</a></p>
    <?php
    $fp = fopen('orders.txt','a+');
    if(!$fp)
        echo "No file please try again later";
    while(!feof($fp)){
        $order = fgets($fp,400);
        echo $order."<br/>";
        echo "-----------------------------------------------------------------------------------------------<br/>";
    }
    fclose($fp);
    ?>
</body>
</html>
