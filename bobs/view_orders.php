<?php 

    # variable name
    $document_root = $_SERVER['DOCUMENT_ROOT'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobs Auto - View Orders</title>
    <style>
          *{
            padding: 10px;
            margin: 8px;
        }
    </style>
</head>
<body>

    <h1>Bob's Auto Parts </h1>
    <h2> Customer Orders!</h2>

    <?php 

        # code to read from a file 
        @$fp = fopen("$document_root/./orders/orders.txt", 'rb');
        flock($fp, LOCK_SH); # lock file for reading

        if (!$fp)
        {
            echo "<p>
                            <strong>
                                No orders pending.<br />
                                Please try agin later!
                            </strong>
                        </p>";

                    exit;
        }

        flock($fp, LOCK_SH); # lock file for reading

        while (!feof ($fp))
        {
            $order = fgets($fp);
            echo htmlspecialchars($order)."<br />";
        }

        flock($fp, LOCK_UN); # release the existing read lock
        fclose($fp);

    ?>


    
</body>
</html>