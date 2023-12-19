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

        date_default_timezone_set('Africa/Nairobi');
        $date = date('d-M-Y, H:i');
        # echo $date;

        echo '<p style="color: green;">Order processed at, '.$date. '</p>';

        # variable names
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];
        $find = $_POST['find'];

        echo '<p>Your order is as follows: </p>';
        
        
        $totalqty = 0;
        $totalqty = intval($tireqty) + intval($oilqty) + intval($sparkqty);

        # capture orders
        if ($totalqty == 0) 
        {
            echo '<p style="color: red;">';
            echo 'You did not order anything on the previous page!';
            echo '</p>';
        }
        else
        {
            if($tireqty > 0)
                #echo "Tires ordered: {$tireqty} set(s).<br>";
                echo htmlspecialchars($tireqty).' <b>Tires</b><br/>';
            if ($oilqty)
                # echo "Oils ordered: {$oilqty}.<br>";
                echo htmlspecialchars($oilqty).' <b>Bottles of oil</b><br/>';
            if ($sparkqty)
                # echo "Spares ordered: {$sparkqty}.<br><br>";
                echo htmlspecialchars($sparkqty).' <b>Spark plugs</b>';
        }
      
        # calculate discount
        if($tireqty < 10)
        {
            $discount = 0;
        }
        elseif(($tireqty >= 10) && ($tireqty <= 49))
        {
            $discount = 5;
        }
        elseif(($tireqty >= 50) && ($tireqty <= 99))
        {
            $discount = 10;
        }
        elseif($tireqty >= 100)
        {
            $discount = 15;
        }

        # switch case to get how customer caome to bobs
        switch($find)
        {
            case "a":
                echo "<p>regular customer</p>";
                break;

            case "b":
                echo "<p>Word of Mouth</p>";
                break;
            
            case "c":
                echo "<p>Reffered by Tv advert</p>";
                break;

            case "d":
                echo "<p>Internet Search</p>";
                break;

            default:
            echo "<p>We do not know how this customer found us.</p>";
            break;
        }


        echo "<p>Items Ordered: ".$totalqty."<br/>";           

            $total_amount = 0.00;

            # declaring pricing constants
            define('TIREPRICE', 100);
            define('OILPRICCE', 10);
            define('SPARKPRICE', 4);

            # $totalqty = 0;
            $total_amount = floatval($tireqty) * TIREPRICE 
                                    + floatval($oilqty) * OILPRICCE 
                                    + floatval($sparkqty) * SPARKPRICE;
/**
            $total_amount = $tireqty * TIREPRICE
                        + $oilqty * OILPRICCE
                        + $sparkqty * SPARKPRICE;
        */

            echo "Subtotal: Kes:. ".number_format($total_amount, 2)."<br/>";

            $taxrate = 0.10; # Assume local tax is 10%
            $total_amount = $total_amount * (1 + $taxrate);
            echo "Total amount (inc VAT): Kes:. ". number_format($total_amount, 2) . "<br />";

            /**
            * echo 'isset($tireqty): '.isset($tireqty).'<br/>';
            * echo 'isset($nothere): '.isset($nothere).'<br/>';
            * echo 'isset($oilqty): '.isset($oilqty).'<br/>';
            */
        
            "</p>";
        
        

        

        




    ?>
    
</body>
</html>