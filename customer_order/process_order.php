<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Results</title>
    <link rel="stylesheet"href="./styles.css">
    <style>

        body{
            font-size: 15px;
            
        }

        p{
            font-weight: 400;
        }

        em{
            color: green;
            text-decoration: none;
        }
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

            # variable names decralation
            # you can also assign variable value to variable
            $tireqty = $_POST['tireqty'];
            $oilqty = $_POST['oilqty'];
            $sparkqty = $_POST['sparkqty'];

            # $total_amount = 0.00;   
            # $totalqty = 0;         
            # $totalamount = (float)$totalqty;

            echo '<p  >Your order is as follows: </p>';
            echo '<p>No. of Tires:  '.htmlspecialchars($tireqty).'</p>';
            echo '<p>Bottle of Oil: '.htmlspecialchars($oilqty).'</p>';
            echo '<p>Spark plugs:  '.htmlspecialchars($sparkqty).'</p>';


            $totalqty = 0;
            $totalqty = $tireqty + $oilqty + $sparkqty;
            
            echo 
            "<p>Items ordered: ".$totalqty."<br />";
                        $totalamount = 0.00;

                        # Price list
                        define('TIREPRICE', 100);
                        define('OILPRICE', 10);
                        define('SPARKPRICE', 4);

                        $totalamount = $tireqty * TIREPRICE
                                               + $oilqty * OILPRICE
                                               + $sparkqty * SPARKPRICE;
                                            
                        echo "Subtotal: <b><em>Kes:. </em></b>".number_format($totalamount, 2)."<br />";
                        
                        $taxrate = 0.10; # assume local tax is 10%
                        $totalamount = $totalamount * (1 + $taxrate);
                        echo "Total including tax: <b>Kes:. </b>".number_format($totalamount, 2).
                        
            "</p>";


            

            # echo TIREPRICE;



        /**  
         *  output Tire value
         *  echo $tireqty.' tires <br/>';  --> wrong output approach
         *  recommended below
         * 
        */
        


        # footer 
        echo '<hr/>';
        echo "<p>Order processed: <br/> By: <b>Bob Kenya! <br/>";
        echo "<span>At: </span></b>".date('H:i, j : s F Y')." </p>";

    ?>

    </div>

   

    
</body>
</html>