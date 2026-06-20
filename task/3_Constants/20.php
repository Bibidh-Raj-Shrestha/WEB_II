<!-- 20. Global Scope Constant -> Define a constant inside a funcƟon using define() and access it
outside the funcƟon to demonstrate global scope.
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
        function constant_demo(){
            define("ALU","ALUUUUU");

        }
        constant_demo();
        echo ALU;
    ?>
</body>
</html>