<!-- 49. Discount with Ternary -> Apply a 20% discount if the total bill is greater than Rs. 5000,
otherwise apply a 5% discount. Use ternary operator -->
<?php
    $bill = 6000;
    $dis = ($bill > 5000) ? $bill*(20/100) : $bill*(5/100);
    echo "Total bill: $bill <br> Discount amount: $dis <br> Paid: " . ($bill-$dis);
    
?>