<!-- 64. MulƟple Parameters -> Write a funcƟon calculateDiscount(price, discountPercent) that
returns the discounted price.  -->
<?php
    function calculateDiscout($price,$discountPercent){
        $dis = $price * ($discountPercent/100);
        return $price - $dis;
    }
    $total = calculateDiscout(10000,5);
    echo $total;
?>