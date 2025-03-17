<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Parameterized Function / Ajay Jamale</title>
</head>
<body>
    <?php  
        //Adding two numbers  
        function add($x, $y) {  
            $sum = $x + $y;  
            echo "Sum of two numbers is = $sum <br><br>";  
        }   
        add(467, 943);  
        //Subtracting two numbers  
        function sub($x, $y) {  
            $diff = $x - $y;  
            echo "Difference between two numbers is = $diff";  
        }   
        sub(943, 467);  
    ?> 
</body>
</html>