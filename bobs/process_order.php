<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto - Process Orders</title>
    <style>
        *{
            padding: 10px;
            margin: 12px;
        }
    </style>
</head>
<body>

    <h1>Bob's Auto Parts </h1>
    <h2> Order Results!</h2>

    <?php 
    /**
     * * Author: ERIC NZYOKA
     * Last modified: December 2023
     * This script processes the customer orders.
     * 
     */

        echo '<p>Order processed at '.date('H : i, js F Y'). '</p>';

        # variable names
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];

        echo '<p>Your order is as follows: </p>';
        echo htmlspecialchars($tireqty).' <b>Tires</b><br/>';
        echo htmlspecialchars($oilqty).' <b>Bottles of oil</b><br/>';
        echo htmlspecialchars($sparkqty).' <b>Spark plugs</b>';

        $totalqty = 0;
        $total_amount = (float)$totalqty;

        # declaring pricing constants
        define('TIREPRICE', 100);
        define('OILPRICCE', 10);
        define('SPARKPRICE', 4);




    ?>
    
</body>
</html>