<!-- 16. define() FuncƟon -> Define a constant using define() for PI with value 3.14159. Calculate
the area of a circle with radius 7.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        define("PI",3.14159);

        $radius = 7;
        function area($r){
            $area = PI * pow($r,2);
            echo $area;
        }

        area($radius);
    ?>
</body>
</html>