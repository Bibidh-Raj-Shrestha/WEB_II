<!-- 35. Password Validator -> Check if a password length is greater than or equal to 8 characters.
Test with "secure123".  -->
<?php
    $pass = "secure123";

    if(strlen($pass) >= 8){
        echo "Password valid";
    }
    else{
        echo "Invalid Password must be 8 character or longer";
    }
?>