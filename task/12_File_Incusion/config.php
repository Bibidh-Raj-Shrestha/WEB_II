<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "Database_name";
    try{
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        echo "connected to database";
    }
    catch(mysqli_sql_exception){
        echo "couldnt connect to database";
    }
?>