<!-- 14. Boolean CondiƟons -> Create a boolean variable $isStudent = true. Write an if-else
statement that displays "Access Granted" if true, otherwise "Access Denied".  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $isStudent = true;
        if($isStudent){
            echo "Access Granted";    
        }
        else{
            echo "Access Denied";
        }
    ?>
</body>
</html>