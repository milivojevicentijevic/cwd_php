<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>
<?php
    $x = 10;
    function myFunction() {
        $y = 20;
        echo $y."<br>";
    }
    myFunction(); // 20
    
    function myFunction2($x) {
        echo $x."<br>";
    }
    myFunction2($x); // 10
?>
</body>
</html>