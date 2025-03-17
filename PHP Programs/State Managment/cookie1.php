<?php  
    // Set a cookie named "user" with value "Ajay", expires in 1 hour
    setcookie("user", "Ajay", time() + 3600, "/");  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookie Example / Ajay Jamale<title>
</head>
<body>

    <h2>Cookie Handling in PHP</h2>

    <?php  
    if (!isset($_COOKIE["user"])) {  
        echo "<p>Sorry, cookie is not found! Please reload the page.</p>";  
    } else {  
        echo "<p>Cookie Value: <strong>" . $_COOKIE["user"] . "</strong></p>";  
    }  
    ?>  
</body>
</html>
