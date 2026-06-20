<!-- 24. Temperature Conversion -> Convert Celsius to Fahrenheit using the formula: F = (C * 9/5)
+ 32. Test with 37°C. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $celsius = 37;
        $f = ($celsius * (9/5)) + 32;

        echo $f;
    ?>
</body>
</html>