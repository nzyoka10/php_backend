<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Results</title>
    <link rel="stylesheet"href="./styles.css">
    <style>
        #main{
            /* border: 3px solid red; 
            padding: 18px;
            margin: 28px; */
        }
    </style>
</head>
<body>
    
    <div id="main">

        <h1>bob's auto parts</h1>
        <h2>Order Results</h2>


        <?php 
        # process the customers order table here....
        echo "<p>Order processed at ".date('H:i, j : s F Y')." </p>";

        # variable names decralation
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];

        # output Tire value
        # echo $tireqty.' tires <br/>';  --> wrong output approach
        # recommended below
        echo '<p>Your order is as follows: </p>';
        echo htmlspecialchars($tireqty).'<strong>Tires: <br/></strong>';

    ?>

    </div>

   

    
</body>
</html>