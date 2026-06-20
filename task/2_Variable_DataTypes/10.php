<!-- 10. Integer OperaƟons -> Declare variables for marks in three subjects (Nepali, English, Math).
Calculate and display the total and average marks.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nepali = 60;
        $english = 80;
        $math = 80;
        $total = $nepali + $english + $math;
        $avg = $total/ 300;
        echo "Total marks : $total <br>"; 
        echo "Average marks : $avg <br>";
    ?>
</body>
</html>