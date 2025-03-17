<?php
    $file = "data.txt";
    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo "<h2>File Content:</h2>";
        echo "<pre>$content</pre>";
    } else {
        echo "<p>File does not exist.</p>";
    }
    echo "<a href='index.php'>Back to Home</a>";
?>
