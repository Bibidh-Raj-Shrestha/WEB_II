<!-- 63. Default Parameters -> Create a funcƟon called generateEmail(firstName, lastName,
$domain = "gmail.com") that returns a complete email address.  -->
<?php
    function generateEmail($firstName,$lastName,$domain = "gmail.com"){
        return $firstName . $lastName .$domain;
    }
    $mail = generateEmail('b','rs');
    echo $mail;
?>