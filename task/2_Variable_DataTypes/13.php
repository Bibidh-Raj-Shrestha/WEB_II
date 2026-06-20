<!-- 13. Double vs Single Quotes -> Create a variable $college = "Himalayan Darshan". Display it
using both double quotes and single quotes to show the difference in parsing. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $college = "Himalaya Darshan";
        echo "$college <br>";
        echo 'College name: ' . $college;
    ?>

</body>
</html>