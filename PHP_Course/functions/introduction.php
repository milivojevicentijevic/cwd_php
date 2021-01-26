<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<?php
    function letsStamp() {
        $x = 456;
        echo $x."<br>"; // 456
    }
    letsStamp();
    // with parameters
    function calculate($num1, $num2) {
        echo $num1 * $num2."<br>";
    }
    calculate(3, 5); // 15
    function calculate2($num1 = 6, $num2 = 4) {
        echo $num1 * $num2."<br>";
    }
    calculate2(5); // 20
    // with return value
    // pass by value
    function add($num1, $num2) {
        $result = $num1 + $num2;
        return $result;
    }
    $res = add(5, 6);
    echo "the number is: $res<br>"; // the number is: 11
    // pass by reference
    $v = 10;
    function addByReference(&$v) {
        $v+= 30;
    }
    addByReference($v);
    echo "The value is ".$v."<br>"; // 40
?>
</body>
</html>