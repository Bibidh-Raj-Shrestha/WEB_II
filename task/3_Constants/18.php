<!-- 18. Magic Constants -> Display the following magic constants: LINE, FILE, DIR, FUNCTION
inside a funcƟon. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function magic(){
            echo __LINE__ . "<br>";
            echo __FILE__ . "<br>";
            echo __DIR__ . "<br>";
            echo __FUNCTION__ . "<br>";
        }
        magic();
    ?>
</body>
</html>