<!-- 54. match Expression (PHP 8+) -> Use match expression to assign a status message based on
HTTP status codes: 200="OK", 404="Not Found", 500="Server Error".  -->
<?php
    $statusCode = 200;

    $message = match ($statusCode) {
        200 => "OK",
        404 => "Not Found",
        500 => "Server Error",
        default => "Unknown Status"
    };

    echo $message;
?>