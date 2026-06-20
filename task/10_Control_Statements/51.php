<!-- 51. else-if Ladder -> Convert a numerical grade (0-100) to a leƩer grade: A (80-100), B (60-79),
C (40-59), D (20-39), E (0-19). -->
<?php
    $marks = 80;
    $grade = "";
    if($marks >= 80 && $marks <= 100)
        $grade = "A";
    else if($marks >= 60 && $marks <= 79)
        $grade = "B";
    else if($marks >= 40 && $marks <= 59)
        $grade = "C";
    else if($marks >= 20 && $marks <= 39)
        $grade = "D";
    else
        $grade = "E";
?>