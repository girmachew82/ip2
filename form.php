<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="post">
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                </tr>
                <tbody>
                    <tr>
                        <td>Tires</td>
                        <td><input type="number" name="tires"/></td>
                    </tr>
                    <tr>
                        <td>Oil</td>
                        <td><input type="number" name="oil"/></td>
                    </tr>
                    <tr>
                        <td>Spark Plugs</td>
                        <td><input type="number" name="spark"/></td>
                    </tr>
                    <tr>
                        <td>How did you find Bob's ?</td>
                        <td>
                                <select name="howufind">
                                    <option value="a">I'm regular customer</option>
                                    <option value="b">TV advetising</option>
                                    <option value="c">Phone directoryI</option>
                                    <option value="d">Word of mouth</option>
                                </select>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"/></td>
                    </tr>
                </tbody>
            </thead>
        </table>

    </form>
        <a href="orders.php">All</a>
</body>
</html>
