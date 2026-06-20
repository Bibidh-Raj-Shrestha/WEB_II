<!-- 28. Increment/Decrement -> Demonstrate pre-increment and post-increment operators.
Show how a++ and ++a differ -->
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
        echo "Pre-increment: " . ++$a . "<br>";

        echo "Post(before) : " . $a++ . "<br>";
        echo "Post(after) : " . $a;
    ?>
</body>
</html>