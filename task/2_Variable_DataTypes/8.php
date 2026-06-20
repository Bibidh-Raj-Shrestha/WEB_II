<!-- 8. Variable Variable ($$) -> Create a variable cityName = "Kathmandu", then use a variable
to create a new variable named cityName="Kathmandu", then use a variable variable to
create a new variable named Kathmandu with the value "Capital City". Display the result.  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cityName = "Kathmandu";
        $$cityName = "Capital City";
        echo "$cityName <br> $Kathmandu";
    ?>
</body>
</html>