<?php  
    session_start();  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Session / Ajay Jamale</title>
</head>
<body>
    <h2>Session Example - Page 1</h2>
    <?php  
        $_SESSION["user"] = "Ajay";  
        echo "<p>Session information is set successfully.</p>";  
    ?>  
    <a href="session2.php">Visit next page</a>  
</body>
</html>
