<!-- 11. Float OperaƟons -> Calculate the total cost of 5 items priced at Rs. 199.99 each, including
13% VAT. Display the subtotal, VAT amount, and total.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $item = 5;
        $subtotal = $item * 199.99;
        $vat_amount = (13/100) * $subtotal;
        $total = $subtotal + $vat_amount;
        echo "Subtotal: $subtotal <br>";
        echo "Vat amount: $vat_amount <br>";
        echo "Total : $total<br>";

    ?>
</body>
</html>