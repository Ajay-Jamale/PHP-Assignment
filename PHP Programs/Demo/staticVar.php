<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Static Variable / Ajay Jamale</title>
</head>
<body>
    <?php  
        function myStaticFunction() {  
            static $x = 0;  
            echo $x;  
            $x++;  
            echo "<br>";  
        }  
        myStaticFunction();  
        myStaticFunction();  
        myStaticFunction();  
    ?>  
</body>
</html>