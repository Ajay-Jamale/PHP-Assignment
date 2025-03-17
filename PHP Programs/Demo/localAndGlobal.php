<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Locla And Global Variable / Ajay Jamale</title>
</head>
<body>
    <?php  
        $globalVar = "This is a global variable.";  
        function myFunction() {  
        $localVar = "This is a local variable.";  
        echo $localVar;  
        echo "<br>";  
        echo $GLOBALS['globalVar'];  
        }  
        myFunction();  
        echo "<br>";  
        echo $globalVar;  
    ?>  
</body>
</html>