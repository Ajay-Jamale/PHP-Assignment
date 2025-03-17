<?php  
    session_start();  
    // Set the session variable if it's not already set
    if (!isset($_SESSION["user"])) {  
        $_SESSION["user"] = "Ajay"; // Assign a value
    }  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Example / Ajay Jamale</title>
</head>
<body>
    <h2>Session Handling in PHP</h2>
    <?php  
    if (isset($_SESSION["user"])) {  
        echo "<p>User is: <strong>" . $_SESSION["user"] . "</strong></p>";  
    } else {  
        echo "<p>Session variable is not set.</p>";  
    }  
    ?>  
</body>
</html>
