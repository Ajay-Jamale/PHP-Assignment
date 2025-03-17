<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Single Quoted String / Ajay Jamale</title>
    </head>
    <body>
        <?php  
            $str1='Hello text   
            multiple line  
            text within single quoted string';  
            $str2='Using double "quote" directly inside single quoted string';  
            $str3='Using escape sequences \n in single quoted string';  
            echo "$str1 <br/> $str2 <br/> $str3";  
        ?>  
    </body>
</html>