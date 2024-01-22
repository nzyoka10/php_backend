<?php 
    /**
     * *  ======   Multidimensional Arrays  ====
     * each location in an array can hold another array
     * ! Basic think of it as a Matrix or Grid 
     * * with Width and Height OR Rows and Columns
     * 
     * Bobs products
     * 
   

        $products = array(
                                array('TIR', 'Tires', 100),
                                array('OIL', 'Oil', 10),
                                array('SPK', 'Spark Plugs', 4)

        );

                # Output: array contents
        echo '<b>Output using echo </b><br />';
        echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br />';
        echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br />';
        echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br />';

        echo '<br />';

        # place for loop inside another for loop
        echo '<b>Output using for --- loop </b><br />';
        for ($row = 0; $row< 3; $row++)
        {
            for ($column = 0; $column < 3; $column++)
            {
                echo ' || '.$products[$row][$column];
            }
            echo ' || <br />';
        }

    */

    # Shorter version of the bobs products 
    $products = array(
                            array(  'Code' => 'TIR',
                                        'Description' => 'Tires',
                                        'Price' => 100
                                    ),
                            array(  'Code' => 'OIL',
                                        'Description' => 'Oil',
                                        'Price' => 10
                                ),
                           array(  'Code' => 'SPK',
                                        'Description' => 'Spark Plugs',
                                        'Price' => 4
                                    )

                                );

    # Output contents of array
    for ($row = 0; $row < 3; $row++)
    {
        echo '| '.$products[$row]['Code']
                .' | '.$products[$row]['Description']
                .' | '.$products[$row]['Price'].' |<br />';
    }



?>