<!-- 32. Equality vs IdenƟty -> Compare 5 == "5" and 5 === "5". Display the results and explain the
difference. 
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
        if(5 == "5")
            echo "5 is equal to \"5\" ";
        if(5 === "5")
            echo "5 is not strictly equal tp \"5\" ";
    ?>
</body>
</html>