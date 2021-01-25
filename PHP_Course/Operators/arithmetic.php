<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Control structures
    $age = 22;
    if ($age < 18) {
        echo "Sorry, you are too young<br>";
    } elseif ($age > 60) {
        echo "Sorry, you are too old<br>";
    } else {
        echo "You are old enogh to go out!<br>";
    }
    // switch statement
    $color = "red";
    switch ($color) {
        case 'green':
            echo "You better paint it green<br>";
            break;
        case 'blue':
            echo "You better paint it blue<br>";
            break;
        default:
            echo "Do not paint it at all<br>";
            break;
    }
    
?>
</body>
</html>