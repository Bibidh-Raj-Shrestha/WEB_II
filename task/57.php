<!-- 57. while Loop -> Use a while loop to print even numbers from 2 to 20. -->
<?php 
    $i = 1;
    while($i <= 20){
        if($i % 2 == 0)
            echo $i . " ";
        $i++;
    }
?>