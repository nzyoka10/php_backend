<!DOCTYPE html>
<html>
    <head>
    <style>
        *{
            padding: 7px;
            margin: 12px;
        }
        body{
            border: 3px solid #f0f0f0f0; 
            padding: 20px;
        }
    </style>
    </head>
<body>

<h1>My first PHP page</h1>

<?php

# php comments 
// single line comment 
/**
 * Multiple line 
 * comments in 
 * PHP 
 * 
 */
echo "Hello World!";

echo "<p>Order processed at ";
echo date('H : i, j : s F Y');
echo "</p>";

# string concatenation or Combining
echo '<p><strong>Example below <i>string concatenation</i>:</strong></p>';
$x = "Hello";
$y = "PHP World!";
$z = $x. " " .$y;
echo $z;

echo '<br/>';
            # phpinfo();

            echo'<p><b>Assignment operator</b><br/> $b = 6 + ($a = 5) ?</p>';
            $b = 6 + ($a = 5);
            echo $b;



?>

</body>
</html>