<!-- 53. switch with Default -> Create a menu system using switch: OpƟon 1 (Add), OpƟon 2 (Edit),
OpƟon 3 (Delete), Default (Invalid OpƟon) -->
<?php
    $option = 1;
    switch($option){
        case 1:
            echo "Item added";
            break;
        case 2: 
            echo "Edit item";
            break;
        case 3: 
            echo "Item deleted";
            break;
        default:
            echo "Invalid option";
    }
?>