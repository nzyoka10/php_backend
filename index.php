<!DOCTYPE html>
<html>
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



?>

</body>
</html>