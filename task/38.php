<!-- 38. OR Operator -> Check if a year (2024) is divisible by 4 OR by 400 to determine if it's a leap
year. 
-->
<?php
    $year = 2024;
    if(($year%4 == 0 && $year%100 != 0 )|| $year%400 == 0){
        echo "Its a leap year!!";
    }
    else{
        echo "Its not a leap year";
    }
?>