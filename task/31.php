<!-- 31. Shopping Discount -> Calculate the final price aŌer applying a 15% discount to an item
cosƟng Rs. 4500. Use assignment operators in the calculaƟon.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $item = 4500;
        $dis = (15/100) * $item;
        $total = $item - $dis;
        echo "Total : $total";
    ?>
</body>
</html>