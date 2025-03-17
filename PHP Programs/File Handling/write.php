<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $content = $_POST["content"];
        $file = "data.txt";
        // Write content to file
        file_put_contents($file, $content);
        echo "<p>File has been written successfully.</p>";
        echo "<a href='index.php'>Back to Home</a>";
    }
?>
