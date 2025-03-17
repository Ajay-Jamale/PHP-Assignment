<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Recursive Function / Ajay Jamale</title>
</head>
<body>
    <?php      
        function factorial($n) {     
            if ($n == 0)      
                return 1; /*Terminating condition*/      
            return ($n * factorial ($n -1));      
        }      
        echo factorial(5);      
    ?>  
</body>
</html>