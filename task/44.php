<!-- 44. Building HTML -> Use string concatenaƟon to build an HTML table row with columns:
Name, Age, City. 
-->
<?php
    $name = "John";
    $age = 25;
    $city = "New York";

    $row = "<table><tr>";
    $row .= "<th> Name </th>";
    $row .= "<th> Age </th>";
    $row .= "<th> City </th>";
    $row .= "</tr>";

    $row .= "<tr>";
    $row .= "<td> " . $name . " </td>";
    $row .= "<td> " . $age . " </td>";
    $row .= "<td> " . $city . " </td>";
    $row .= "</tr></table>";

    echo $row;
?>