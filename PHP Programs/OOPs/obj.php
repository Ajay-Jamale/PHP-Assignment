<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object / Ajay Jamale</title>
</head>
<body>
<?php
    class Mobile {
        var $model;
        function showmodel($number) {
            $this->model = $number;
            echo "Model number is: " . $this->model . "<br>";
        }
    }
    $samsung = new Mobile();
    $samsung->showmodel("S7");

    $nokia = new Mobile();
    $nokia->showmodel("N10");
    ?>
</body>
</html>