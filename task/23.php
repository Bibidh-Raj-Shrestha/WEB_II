<!-- 23. ExponenƟaƟon -> Calculate the compound interest using the formula: A = P(1 + r)^n. Use
P=10000, r=0.08, n=3.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $P=10000;
        $r=0.08; 
        $n=3;
        $A = $P*pow((1 + $r),$n);
        echo $A;
    ?>
</body>
</html>