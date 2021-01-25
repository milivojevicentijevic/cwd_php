<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// Exercise
// 1
    $x = 3;
    $y = 4;
    $z = ($x + $y) * 5;
    echo "The total is ".$z."<br>";
// 2
    $price = 200;
    $vat = 0.18;
    $totalPrice = $price + $price * $vat;
    echo "Price: ".$price."<br>";
    echo "Vat: ".$vat."<br>";
    echo "Total Price: ".$totalPrice."<br>";
// 3
    $p = 4;
    $q = 8;
    $r = 13;
    $average = ($p + $q + $r) / 3;
    echo number_format($average, 2, ',', '')."<br>";
// 4
    $cities = array('Netherlands' => 'Amsterdam', 'Germany' => 'Berlin', 'Thailand' => 'Bangkok', 'Hungary' => 'Budapest', "France" => 'Paris');
    foreach ($cities as $key => $value) {
        echo "The capital of ".$key." is ".$value."<br>";
    }
// 5
    $cm = 12;
    $cmToInch = 0.39;
    $inch = $cm * $cmToInch;
    echo $cm." centimeters is ".$inch." inches <br>";
// 6
    $expenses = array(345, 234, 298, 278);
    $sum = 0;
    for ($i=0; $i < count($expenses); $i++) { 
        $sum = $sum + $expenses[$i];
    }
    $totalAmount = $sum;
    $amountOfExpenses = count($expenses);
    echo "My ".$amountOfExpenses." biggest expenses were ".$totalAmount."<br>";
// 7
    $weather = array('rain','sunshine','clouds','hail','sleet','snow','wind');
    echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Than came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].";
?>
</body>
</html>
