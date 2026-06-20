<!-- 41. Login System -> Create a simple login check: username is "admin" AND password is "1234".
Display "Welcome Admin" if true, otherwise "Invalid CredenƟals".
-->
<?php
    $username = "admin";
    $password = "1234";

    if($username === "admin" && $password === "1234")
        echo "Welcome Admin";
    else
        echo "Invalid Credentials";
?>