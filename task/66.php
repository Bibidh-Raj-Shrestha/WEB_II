<!-- 66. Scope DemonstraƟon -> Create a funcƟon that aƩempts to access a variable defined
outside the funcƟon. Show that it's inaccessible. -->
<?php
    $a = 12;
    function demo(){
        // cannot be accessed
        echo $a;
    }
    demo();
?>