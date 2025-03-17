<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling Form / Ajay Jamale</title>
</head>
<body>

    <h2>Enter Text to Save in File</h2>

    <form action="write.php" method="post">
        <textarea name="content" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Save to File">
    </form>

    <h3>Other Actions:</h3>
    <a href="read.php">Read File</a> |
    <a href="append.php">Append to File</a> |
    <a href="delete.php">Delete File</a>

</body>
</html>
