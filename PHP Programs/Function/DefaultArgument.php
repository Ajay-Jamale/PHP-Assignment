<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Default Argument / Ajay Jamale</title>
</head>
<body>
    <?php  
        function calculateArea($length = 10, $width = 5) {  
            return $length * $width;  
        }  
        echo calculateArea();   
    ?>  
</body>
</html>