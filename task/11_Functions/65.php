<!-- 65. FuncƟon with Array -> Write a funcƟon that accepts an array of numbers and returns their
sum and average.  -->
<?php
    function calculate($arr){
        $sum = array_sum($arr);
        $avg = $sum / count($arr);
        return [$sum,$avg];
    }
    [$sum,$avg] = calculate([10,20,30,40]);
    echo "Sum : $sum <br> Average : $avg";
?>