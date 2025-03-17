<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variables / Ajay Jamale</title>
</head>
<body>
    <?php   
        $greeting = "Hello, World!";  //  String variable
        $age = 30;      // Integer Variable
        $price = 19.99;   // Floating Point Variable
        $isLoggedIn = true;  // Boolean Variable

        echo $greeting;     
        echo "My age is: " . $age;  
        echo "The price is: $" . $price;  
        if ($isLoggedIn) {  
            echo "User is logged in.";  
        } else {  
            echo "User is not logged in.";  
        }  
    ?>  
</body>
</html>