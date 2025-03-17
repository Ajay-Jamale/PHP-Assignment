<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multidimention Array / Ajay Jamale</title>
</head>
<body>
    <?php    
        $emp = array  
        (  
            array(1,"Ajay",400000),  
            array(2,"Sayali",500000),  
            array(3,"Sakshi",300000)  
        );  
        
        for ($row = 0; $row < 3; $row++) {  
            for ($col = 0; $col < 3; $col++) {  
                echo $emp[$row][$col]."  ";  
            }  
            echo "<br/>";  
        }  
    ?>  
</body>
</html>