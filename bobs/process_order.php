<?php

/**
 *  * Author: Eric Nzyoka
 *! Last modified: December 2023
 ** This script processes the customer orders.
 *
 *ToDo: Code below
 *
 */

# program variable names
$tireqty = ((int) $_POST['tireqty']);
$oilqty = ((int) $_POST['oilqty']);
$sparkqty = ((int) $_POST['sparkqty']);
$address = preg_replace('/ \t | \R/', '', $_POST['address']);
$document_root = $_SERVER['DOCUMENT_ROOT'];

date_default_timezone_set('Africa/Nairobi');
$date = date('H:i, js F Y');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bob's Auto - Process Orders</title>
        <style>
            *{
                padding: 10px;
                margin: 8px;
            }

            .para{
                color: green; font-weight: 800
            }

        .parah{
            color: red; font-weight: 850;
            }
        </style>
    </head>
    <body>

        <h1>Bob's Auto Parts </h1>
        <h2> Order Results!</h2>

        <?php

            echo "Order processed at " . date('d-M-Y, H:i') . "<br />";
            echo "<b>Your order is as follows: </b>";

            $totalqty = 0;
            $total_amount = 0.00;

            # Price constants
            define('TIREPRICE', 100);
            define('OILPRICE', 10);
            define('SPARKPRICE', 4);

            $totalqty = $tireqty + $oilqty + $sparkqty;
            echo "<p><b>Items ordered: </b>" . $totalqty . " <br />";

            if ($totalqty == 0) {
                echo '<p style="color: red;">';
                echo 'You did not order anything on the previous page!';
                echo '</p>';
            } else {
                if ($tireqty > 0)

                #echo "Tires ordered: {$tireqty} set(s).<br>";
                {
                    echo htmlspecialchars($tireqty) . ' <b>Tires</b><br/>';
                }

                if ($oilqty)

                # echo "Oils ordered: {$oilqty}.<br>";
                {
                    echo htmlspecialchars($oilqty) . ' <b>Bottles of oil</b><br/>';
                }

                if ($sparkqty)

                # echo "Spares ordered: {$sparkqty}.<br><br>";
                {
                    echo htmlspecialchars($sparkqty) . ' <b>Spark plugs</b><br /><br />';
                }

            }

            # Totals calculations here
            $total_amount = $tireqty * TIREPRICE
                + $oilqty * OILPRICE
                + $sparkqty * SPARKPRICE;

            echo "Subtotal: Kes:. " . number_format($total_amount, 2) . "<br/>";

            # Including Taxation fee (VAT) : assumed local tax 10%
            $taxrate = 0.10;
            $total_amount = $total_amount * (1 + $taxrate);
            echo "Total (Inc VAT), Kes:. " . number_format($total_amount, 2) . "<br />";

            # delivery address, 'customer order'
            echo "Shipping address: " . htmlspecialchars($address) .
            # endif
            "</p>";

            # string to represent one record in the data file
            $outputstring = $date . '\t' . $tireqty . ' Tires \t' . $oilqty . ' Oil\t'
            . $sparkqty . ' Spark plugs\t\$' . $total_amount
            . '\t' . $address . '\n';

            # code to open file for appending (writing)
            @$fp = fopen("$document_root/./orders/orders.txt", 'ab');

            if (!$fp) {
            echo "<p>
                    <strong>
                        Your order could not be processed at this time.
                        Please try later!
                    </strong>
                </p>";

            exit;
            }

            flock($fp, LOCK_EX);

            fwrite($fp, $outputstring, strlen($outputstring));
            flock($fp, LOCK_UN);
            fclose($fp);

            echo "<p>Order written!</p>";


           

        ?>

    </body>
</html>


<?php

/**
 * * date_default_timezone_set('Africa/Nairobi');
$date = date('d-M-Y, H:i');
# echo $date;

echo '<p style="color: green;">Order processed at, '.$date. '</p>';


 *!variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$find = $_POST['find'];
$address = $_POST['address'];
$document_root = $_SERVER['DOCUMENT_ROOT'];


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
{/**
 * * case "a":
echo "<p class='para'>regular customer</p>";
break;

case "b":
echo "<p class='para'>Word of Mouth</p>";
break;

case "c":
echo "<p class='para'>Reffered by Tv advert</p>";
break;

case "d":
echo "<p>Internet Search</p>";
break;

default:
echo "<p class='parah'>We do not know how this customer found us.</p>";
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


$total_amount = $tireqty * TIREPRICE
+ $oilqty * OILPRICE
+ $sparkqty * SPARKPRICE;


echo "Subtotal: Kes:. ".number_format($total_amount, 2)."<br/>";

$taxrate = 0.10; # Assume local tax is 10%
$total_amount = $total_amount * (1 + $taxrate);
echo "Total amount (inc VAT): Kes:. ". number_format($total_amount, 2) . "<br />";
echo "<b style='color: green;'>Address to ship to is, ".htmlspecialchars($address)."</b><br/>";

/*
 * echo 'isset($tireqty): '.isset($tireqty).'<br/>';
 * echo 'isset($nothere): '.isset($nothere).'<br/>';
 * echo 'isset($oilqty): '.isset($oilqty).'<br/>';




"</p>";

# @$fp = fopen("$document_root/../orders/orders.txt", 'ab');
@$fp = fopen("$document_root/ ./orders/orders.txt", 'a');

if(!$fp)
{
echo "<p style='color: maroon;'>
<b>
Your order could not be processed at this time." .
"<i>please try again later</i>.
</b>
</p>";
exit;
}

fwrite($fp, $outputstring, strlen($outputstring));
$outputstring = $date.'\t'.$tireqty.' Tires \t'.$oilqty.' Oil\t'
.$sparkqty.' Spark plugs\t\$'.$total_amount
.'\t'.$address.'\n';

 */

?>

