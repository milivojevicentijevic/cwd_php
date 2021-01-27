<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $x = 100;
    $y = 200;
    function add() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    add();
    echo $z;
?>   
</body>
</html>