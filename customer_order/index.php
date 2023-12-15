<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Form</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

    <section>
        <h1>customer order</h1>
        <form action="./process_order.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tires</td>
                        <td><input type="number" name="tireqty" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>Oil</td>
                        <td><input type="number" name="oilqty" value="0" min="0"></td>
                    </tr>
                    <tr>
                        <td>Spark Plugs</td>
                        <td><input type="number" name="sparkqty" value="0" min="0"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Submit Order">
        </form>
    </section>

</body>
</html>
