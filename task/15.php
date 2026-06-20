<!-- 15. var_dump Usage -> Use var_dump() to display the type and value of the following
variables: age=25, name = "Ram", price = 99.99, isAcƟve = false, $scores = [85, 90, 78]. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $age = 25;
    $name = "Ram";
    $price = 99.99; 
    $isActive = false;
    $scores = [85, 90, 78];
    var_dump($age);
    var_dump($name);
    var_dump($price);
    var_dump($isActive);
    var_dump($scores);
    ?>
</body>
</html>