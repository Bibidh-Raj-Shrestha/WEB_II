<!-- 69. require vs include -> Demonstrate the difference between require and include by including
a missing file in both ways.  -->
<?php
    include("xyz.php");
    echo "works with warning";

    require("abc.php");
    echo "doesnt work";    
?>