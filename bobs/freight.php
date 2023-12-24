<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto - Freight</title>
    <style>
        *{
            padding: 10px;
            margin: 12px;
        }
    </style>
</head> 
<body>

    <h1>Bob's Auto Parts </h1>
    <h4>Freight Costs</h4>

    <table style="border: 1px solid #bb9c66; padding: 2px; width: 30%;">
        <tr style="background: #ccc;">
            <td style="width: 5%; text-align: center;">Distance (Km)</td>
            <td style="width: 7%; text-align: center;">Cost (Kes. )</td>
        </tr>

        <?php

            # display Bobs freight table using for_loop
            for($distance = 50; $distance <= 250; $distance +=50)
            {
                echo"<tr>
                            <td style='text-align: center;'>".$distance."</td>
                            <td style='text-align: center;'>".($distance / 10)."</td>
                        </tr>\n";
            }
            
             

            /** 
             * !  display Bobs freight table using while_loop
                    $distance = 50;
                    while($distance <= 250 )
                    {
                        echo "<tr>
                                        <td style='text-align: center;'>".$distance."</td>
                                        <td style='text-align: center;'>".($distance / 10)."</td>
                                </tr>\n";

                                # $distance += 50;  Equals :: Distance + 50; 50 + 50 = 100km
                                # $a +=b   ===   $a = $a + $b;
                            $distance +=50;
                    }
            */

        ?>

        <!-- 
                <tr>
                    <td style="text-align: center;">50</td>
                    <td style="text-align: center;">5</td>
                </tr>

                <tr>
                    <td style="text-align: center;">100</td>
                    <td style="text-align: center;">10</td>
                </tr>

                <tr>
                    <td style="text-align: center;">150</td>
                    <td style="text-align: center;">15</td>
                </tr>

                <tr>
                    <td style="text-align: center;">200</td>
                    <td style="text-align: center;">20</td>
                </tr>

                <tr>
                    <td style="text-align: center;">250</td>
                    <td style="text-align: center;">25</td>
                </tr>

            -->


    </table>
    
</body>
</html>