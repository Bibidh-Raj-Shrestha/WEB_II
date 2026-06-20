<!-- 26. BMI Calculator -> Calculate BMI using: weight (kg) / (height in meters)². Use weight=70,
height=1.75. 
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
        $weight = 70;
        $height = 1.75;
        $bmi = $weight / pow($height,2);
        echo $bmi 
    ?>
</body>
</html>