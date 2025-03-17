<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Function trim(),str_word_Count(), str_repeat() / Ajay Jamale</title>
</head>
<body>
    <?php
        $str = "   Learn PHP easily!   ";
        // Trim whitespace
        $trimmed = trim($str);
        echo "Trimmed String: '" . $trimmed . "'<br>";
        // Word count
        echo "Word Count: " . str_word_count($trimmed) . "<br>";
        // Repeat string
        echo "Repeated String: " . str_repeat($trimmed . " ", 2) . "<br>";
    ?>
</body>
</html>