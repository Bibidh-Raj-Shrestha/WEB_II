<!-- 19. Constant Case SensiƟvity -> Define a constant "GREETING" using define() and try to echo
it in lowercase to demonstrate case sensiƟvity.
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
        define("GREETING","HELLO");
        echo "Luffy says " . GREETING . "<br>";
        echo "Luffy says " . greeting;
    ?>
</body>
</html>