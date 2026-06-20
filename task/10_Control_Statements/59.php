<!-- 59. foreach Loop -> Create an array of five city names and use foreach to display each city with
its index.  -->
<?php
    $arr = ["Brt","KTM","PKH","Dharan","Ithari"];
    foreach($arr as $i => $a){
        echo "$i . $a <br>";
    }
?>