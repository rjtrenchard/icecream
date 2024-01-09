<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice Cream Order Summary</title>
</head>
<body>
    <h1>Thank you for your order!</h1>

    <?php

        //turn on error reporting
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        // define constants
        const PRICE_PER_SCOOP = 2.50;
        const WA_TAX_RATE = 0.11;

        // get scoop data
        $scoops = $_POST['scoops'];
        $flavors = $_POST['flavor'];
        $flavorstr = implode(", ", $flavors);
        $cone = $_POST['cone'];

        // calculate total due
        $subtotal = PRICE_PER_SCOOP + $scoops;
        $total = $subtotal * WA_TAX_RATE;

        // display scoops
        echo "<p>scoops: $scoops</p>";
        echo "<p>flavors: $flavorstr</p>";
        echo "<p>Cone: $cone</p>";
        echo "<br><p>Subtotal: $subtotal</p>";
        echo "<p>Total: $total</p>"
    ?>


</body>
</html>