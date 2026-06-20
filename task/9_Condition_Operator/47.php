<!-- 47. Null Coalescing -> Use the null coalescing operator (??) to assign a default value if
$username is null -->
<?php
    $a = 'brs';
    $result = $a ?? "default";
    echo $result;
?>