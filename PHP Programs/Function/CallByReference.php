<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Call By Reference / Ajay Jamale</title>
</head>
<body>
    <?php  
        function adder(&$str2)  
        {  
            $str2 .= 'Call By Reference';  
        }  
        $str = 'This is ';  
        adder($str);  
        echo $str;  
    ?>  
</body>
</html>