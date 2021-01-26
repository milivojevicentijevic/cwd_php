<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
</head>
<body>
<?php
    // Exercises Control Structures
    // 1
    $x = 34;
    $y = 55;
    if ($x > $y) {
        echo "Highest value is $x <br>";
        echo "Lowest value is $y <br>";
    } elseif($y > $x) {
        echo "Highest value is $y <br>";
        echo "Lowest value is $x <br>";
    } else {
        echo "Both values are equal<br>";
    }
    // 2
    $number = 3;
    switch ($number) {
        case 1:
            echo "Spades <br>";
            break;
        case 2:
            echo "Hearts <br>";
            break;
        case 3:
            echo "Diamonds <br>";
            break;
        case 4:
            echo "Clubs <br>";
            break;
        default:
            echo "Not a right number specified";
            break;
    }
    // 3
    $points = 76;
    switch ($points) {
        case $points <= 100 && $points >= 90:
            echo "Student passed the exam, and student got A<br>";
            break;
        case $points <= 100 && $points >= 90:
            echo "Student passed the exam, and student got B<br>";
            break;
        case $points <= 79 && $points >= 70:
            echo "Student passed the exam, and student got C<br>";
            break;
        case $points <= 69 && $points >= 60:
            echo "Student didn't passed the exam, and student got D<br>";
            break;
        default: 
            echo "Student didn't passed the exam, and student got F<br>";
            break;
    }
    // 4
    $workingHours = 6800;
    $age = 3;
    $failures = 23;
    if($workingHours > 10000 || $age > 7 || $failures > 25) {
        echo "Machine will be replaced<br>";
    } else {
        echo "Machine will not be replaced<br>";
    }
    // 5
    $year = 1100;
    if($year % 400 == 0) {
        echo "$year is a lap yeaer<br>";
    } elseif($year % 4 == 0 && $year % 100 != 0 ) {
        echo "$year is a lap yeaer<br>";
    } else {
        echo "$year is not a lap yeaer<br>";
    }
    // 6
    $num1 = 6;
    $num2 = 2;
    if($num1 > $num2) {
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;
    }
    while ($num1 <= $num2) { 
        echo $num1." * ".$num2." = ".$num1 * $num2."<br>"; 
        $num1++;
    }
    // 7
    $first = 0;
    $second = 1;
    echo $first."<br>";
    echo $second."<br>";
    do {
        $new = $first + $second;
        echo $new."<br>";
        $first = $second;
        $second = $new;
        
    } while ($first < 20); 

?>
</body>
</html>