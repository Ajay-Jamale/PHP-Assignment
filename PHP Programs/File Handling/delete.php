<?php
    $file = "data.txt";
    if (file_exists($file)) {
        unlink($file);
        echo "<p>File has been deleted successfully.</p>";
    } else {
        echo "<p>File does not exist.</p>";
    }
    echo "<a href='index.php'>Back to Home</a>";
?>
