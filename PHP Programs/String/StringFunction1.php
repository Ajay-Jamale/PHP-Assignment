<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions strlen(),strrev(),strtoupper() / Ajay Jamale</title>
</head>
<body>
    <?php
        $str = "Hello PHP!";
        // String length
        echo "String Length: " . strlen($str) . "<br>";
        // Reverse string
        echo "Reversed String: " . strrev($str) . "<br>";
        // Convert to uppercase
        echo "Uppercase: " . strtoupper($str) . "<br>";
    ?>
</body>
</html>