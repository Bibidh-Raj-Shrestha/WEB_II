<!-- 61. FuncƟon with Parameters -> Create a funcƟon called calculateArea(length,length,width)
that calculates and returns the area of a rectangle -->
<?php
    function calculateArea($length,$width){
        return $length * $width;
    }
    $area = calculateArea(2,3);
    echo $area;
?>