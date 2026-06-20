<!-- 52. switch Statement -> Use switch to display the day name based on a number (1-7).
Monday=1, Tuesday=2, etc. 
-->
<?php
    $num = 1;
    switch($num){
        case 1:
            echo "Sunday";
            break;
        case 2:
            echo "Monday";
            break;
        case 3:
            echo "Tuesday";
            break;
        case 4:
            echo "Wednesday";
            break;
        case 5:
            echo "Thursday";
            break;
        case 6:
            echo "Friday";
            break;
        case 7: 
            echo "Saturday";
            break;
        default:
            echo "Please enter a valid number";
    }
?>