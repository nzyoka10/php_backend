<?php
/**
 * ^ Multidimensional Arrays
 * ~ like forming two or three-dimensional matrix
 * ~ array inside other array
 * ~ example below
 * 
*/

    $products = array( 
                                    array('Code' => 'TIR', 
                                            'Description' => 'Tires', 
                                            'Price' => 100),

                                    array('Code' => 'OIL', 
                                            'Description' => 'Oil', 
                                            'Price' => 10),
                                     
                                    array('Code' => 'SPK', 
                                            'Description' => 'Spark Plugs',
                                            'Price' => 4) 
                                    
                                );
    
    // Output below
    for ($row = 0; $row <= 2; $row++)
    {
        echo '|'.$products[$row] ['Code'].' | '.$products[$row] ['Description'].' | '.$products[$row] ['Price'].' |<br />';

       /**
        *while (list ( $key, $value) = ( $products[$row]) == false )
            {
                echo ' | '.$value;
            }
            echo '| <br/>';
        */
    }

    //& Sorting arrays
        $productsT = array('tires', 'oil', 'spark plugs');
        sort($productsT);
        echo '<br>'.$productsT;




    /**
         *  for ($column = 0; $column < 4; $column++)
         *  {
         * echo ' | '.$products[$row] [$column];
         * }
         * 
    */
?>