<!-- 48. Nested Ternary -> Use nested ternary operators to display "Excellent", "Good", or "Needs
Improvement" based on a score of 85. 
-->
<?php
    $score =  85;
    $result = ($score >= 80)? "Excellent" :
            (($score >= 60)? "Good": "Needs Improvement");
    echo $result;
?>