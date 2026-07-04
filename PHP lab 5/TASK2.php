<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP</title>
</head>

<body>
    <?php
    $shopName = "Bhola Cafe";
    function serveCustomer($customerName)
    {
        global $shopName;
        $currentCustomer = $customerName;
        static $customerCount = 0;
        $customerCount++;
        echo "Shop Name: $shopName <br>";
        echo "Customer Name: $currentCustomer <br>";
        echo "Total Customers Served: $customerCount <br>";
    }
    serveCustomer("Ali");
    serveCustomer("Haider");
    serveCustomer("Hassan");

    ?>
</body>

</html>