<!-- 40. CombinaƟon Operators -> Check if a student has passed both Math (score=75) AND
English (score=65) with passing marks of 40 each -->
<?php
    $math = 75;
    $english = 65;

    if($math >= 40 && $english >= 65)
        echo "You have passed both math and english";
    else{
        if($math < 40)
            echo "You failed math";
        else if($english < 40)
            echo "You failed english";
        else
            echo "You failed both the subjects";
    }
?>