<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions strpos(),substr(),str_replace() / Ajay Jamale</title>
</head>
<body>
    <?php
        $str = "Welcome to PHP programming!";
        // Find position of "PHP"
        $pos = strpos($str, "PHP");
        echo $pos !== false ? "Position of 'PHP': $pos<br>" : "'PHP' not found<br>";
        // Extract substring
        echo "Extracted Word: " . substr($str, 11, 3) . "<br>";
        // Replace "PHP" with "Web"
        $newStr = str_replace("PHP", "Web", $str);
        echo "Replaced String: " . $newStr . "<br>";
    ?>
</body>
</html>