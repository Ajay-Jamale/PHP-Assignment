<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Double Quoted String / AJay Jamale</title>
</head>
<body>
    <?php  
        $str1="Hello text   
        multiple line  
        text within double quoted string";  
        $str2="Using double \"quote\" with backslash inside double quoted string";  
        $str3="Using escape sequences \n in double quoted string";  
        echo "$str1 <br/> $str2 <br/> $str3";  
    ?>  
</body>
</html>