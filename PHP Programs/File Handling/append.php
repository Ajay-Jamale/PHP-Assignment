<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Append to File / Ajay Jamale</title>
</head>
<body>

    <h2>Append Text to File</h2>
    <form action="append.php" method="post">
        <textarea name="append_content" rows="5" cols="40" required></textarea><br><br>
        <input type="submit" value="Append">
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $append_content = $_POST["append_content"];
    $file = "data.txt";
    // Append content to file
    file_put_contents($file, "\n" . $append_content, FILE_APPEND);
    echo "<p>Content appended successfully.</p>";
    echo "<a href='index.php'>Back to Home</a>";
}
?>
