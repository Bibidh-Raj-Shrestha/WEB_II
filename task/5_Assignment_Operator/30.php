<!-- 30. Swap Values -> Swap the values of two variables (a=10, b=20) without using a third
variable.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;
        echo "Before Swapping: <br> a:$a and b:$b";

        $c = $a;
        $a = $b;
        $b = $c;

        echo "After Swapping: <br> a:$a and b:$b";
    ?>
</body>
</html>