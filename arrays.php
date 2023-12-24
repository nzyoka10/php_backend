<?php 

    /**
    * * Array(s) - varible(s) that stores set of related values
    * Multidimensional array - An array containing another array
    * $products[0] = 'Fuses'; # replaces items 'tire'
    */
    
    $products = ['Tires', 'Oil', 'Spark Plugs'];

    # foreach loop
    echo '<b>Products</b><br />';
    foreach($products as $current)
    {
        echo $current."<br />";
    }

    # Initializing an Array
    #$prices = array('Tire'=>100, 'Oil'=>10, 'Spark Plugs'=>4);

    # Accessing the array element
   # $prices['Tires'],   $prices['Oil'],   $prices['Spark Plugs']
   # $prices = array('Tires'=>100);

   $prices['Tires'] = 100;
   $prices['Oil'] = 10;
   $prices['Spark Plugs'] = 4;

   echo '<br />';

   # access prices using loops
   echo '<b>Products and Prices</b><br />';
   foreach($prices as $key => $value)
   {
    echo $key." - ".$value."<br />";
   }







    # array called numbers, range 1 to 10
    $numbers = range(1, 10);

    # array of odd numbers between 1 to 10
    # using the range function
    $odd = range(1, 10, 2);

    # range() function can also be used with characters
    $letters = range('a', 'z');


     /** 
       * Array
       * *   $products = ['Tires', 'Oil', 'Spark Plugs'];
       * 
       * * Output using for_loop;
     * # using Loops to access the Array
     * for ($i = 0; $i < 3; $i++)
     * {
     *  echo $products[$i]."<br /> ";
     * 
     * }
     * 
     * * Output using echo;
     * echo $products[0];
     * echo $products[1];
    echo $products[2];
    */



?>