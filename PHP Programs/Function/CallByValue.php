<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Call By Value / Ajay Jamale</title>
</head>
<body>
    <?php  
        function increment($num) {  
            $num++;  
            echo "Inside the function: \$num = " . $num . "\n";  
        }  
        $myNumber = 5;  
        echo "Before the function: \$myNumber = " . $myNumber . "\n";  
        increment($myNumber);  
        echo "After the function: \$myNumber = " . $myNumber . "\n";  
    ?>
</body>
</html>