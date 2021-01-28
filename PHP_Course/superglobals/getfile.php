<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $filePath = "uploads/file.txt";
    $output = file_get_contents($filePath);
    $ages = explode("\n", $output);
    $ages = preg_replace('/[^0-9]/', '', $ages);

    $totalAge = 0;
    $i = 0;
    foreach ($ages as $age) {
        echo $age."<br>";
        $age = (int)$age;
        $totalAge = $totalAge + $age;
        $i++;
    }
    $averageAge = $totalAge / $i;
    echo "The average age is ".$averageAge."<br>";
?>
</body>
</html>