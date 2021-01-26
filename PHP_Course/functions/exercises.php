<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>
<?php
    // 1
    function calculateVat($price, $vat) {
        $calculatedPrice = $price + $price * $vat;
        return "Price is $price, vat is $vat, total price is $calculatedPrice<br>";
    }
    $totalPrice = calculateVat(200, 0.18);
    echo $totalPrice;
    // 2
    function isLeapYear($year) {
        if($year % 400 == 0) {
            return "$year is a lap year<br>";
        } elseif ($year % 4 == 0 && $year % 100 != 0) {
            return "$year is a lap year<br>";
        } else {
            return "$year is not a lap year<br>";
        }
    }
    echo isLeapYear(1980);
    echo isLeapYear(1287);
    echo isLeapYear(2100);
    // 3
    function addNumbers($num1, $num2) {
        $result = $num1 + $num2;
        return "Adition of $num1 and $num2 is $result <br>";
    }
    function subtractNumbers($num1, $num2) {
        $result = $num1 - $num2;
        return "Subtraction of $num1 and $num2 is $result <br>";
    }
    function multiplyNumbers($num1, $num2) {
        $result = $num1 * $num2;
        return "Multiplicity of $num1 and $num2 is $result <br>";
    }
    function divideNumbers($num1, $num2) {
        $result = $num1 / $num2;
        return "Division of $num1 and $num2 is $result <br>";
    }
    echo addNumbers(5, 4);
    echo subtractNumbers(5, 4);
    echo multiplyNumbers(5, 4);
    echo divideNumbers(5, 4);
    // 4
    function swapNumbers($num1, $num2) {
        $words = "Before swapping: num1 = $num1, num2 = $num2<br>";
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
        $words .= "After swapping: num1 = $num1, num2 = $num2<br>";
        return $words;
    }
    echo swapNumbers(4, 8);
    // 5
    function evenOrNot($num1) {
        if($num1 % 2 == 0) {
            return "$num1 is even<br>";
        } else {
            return "$num1 is odd<br>";
        }
    }
    echo evenOrNot(46);
    echo evenOrNot(11);
    // 6
    function isPrime($num1) {
        if ($num1 == 1) {
            return "$num1 is not a prime number<br>";
        } else {
            for($i = 2; $i < $num1 / 2; $i++) {
                if($num1 % $i == 0) {
                    return "$num1 is not a prime number<br>";
                    break;
                }
    
            }
            return "$num1 is a prime number<br>";
        }
    }
    echo isPrime(79);
?>
</body>
</html>