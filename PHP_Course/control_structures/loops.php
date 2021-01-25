<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<?php
    // while loop
    $x = 1;
    while ($x <= 5) {
        echo $x."<br>";
        $x++;
    }
    // do-while loop
    $y = 1;
    do {
        echo $y."<br>";
        $y++;
    } while ($y <= 5);
    // for loop
    for ($i=1; $i <= 5 ; $i++) { 
        echo $i."<br>";
    }
    // foreach loop
    $names = array('Michael','John','Jessica','David','Alisa');
    foreach ($names as $name) {
        echo "$name is going to school<br>";
    }

?>
</body>
</html>