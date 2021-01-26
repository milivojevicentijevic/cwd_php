<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in</title>
</head>
<body>
<?php
    // built-in functions

// string functions
    $str = "Today is a sunny day";
    // string length
    echo strlen($str)."<br>"; // 20
    // string word count
    echo str_word_count($str)."<br>"; // 5
    // how to find text within a string
    $email = "misagrf@yahoo.com";
    if (strpos($email, "@")) {
        echo "This is a valid email<br>"; // This is a valid email
    }
    // every first letter of a word is uppercase
    echo ucwords("What is your name?")."<br>"; // What Is Your Name?
    // whole string to uppercase
    echo strtoupper("What is your name?")."<br>"; // WHAT IS YOUR NAME?
    // whole string to lowercase
    echo strtolower("What is your name?")."<br>"; // what is your name?
    echo "<br>---------------------------------<br>";
// math functions
    // ceil
    echo ceil(1.43)."<br>"; // 2
    // floor
    echo floor(1.43)."<br>"; // 1
    // round
    echo round(1.43, 1)."<br>"; // 1.4
    // exp
    echo exp(2)."<br>"; // 7.3890560989307
    echo "<br>---------------------------------<br>";
// date functions
    // date
    echo date('d')."<br>"; // 26
    echo date('j')."<br>"; // 26 (bez 0 ako je broj manji od 10)
    echo date('D')."<br>"; // Tue
    echo date('l')."<br>"; // Tuesday
    echo date('m')."<br>"; // 01
    echo date('n')."<br>"; // 1
    echo date('F')."<br>"; // January
    echo date('y')."<br>"; // 21
    echo date('Y')."<br>"; // 2021
    echo date('Y/m/d')."<br>"; // 2021/01/26
    echo date('d.m.Y.')."<br>"; // 26.01.2021.
    // times
    echo date('g')."<br>"; // 9
    echo date('h')."<br>"; // 09
    echo date('G')."<br>"; // 21 (without zeros)
    echo date('H')."<br>"; // 21
    echo date('a')."<br>"; // pm
    echo date('A')."<br>"; // PM
    echo date('i')."<br>"; // 06
    echo date('s')."<br>"; // 02
    echo date('H:i:s a')."<br>"; // 21:06:52 pm
    // set timezone
    echo date_default_timezone_set('Europe/Belgrade')."<br>"; // 1
    // String to time
    $time = strtotime('9:10pm January 26 2021'); 
    echo $time."<br>"; // 1611691800

    echo date('m/d/Y H:i a', $time)."<br>"; // 01/26/2021 21:10 pm
    echo "<br>---------------------------------<br>";
// array functions
    $personalInfo = array("Name" => "Milivoje", "Age" => 35, "City" => "Valjevo");
    $moreInfo = array("State" => "Serbia", "Weight" => 95);
    $personalInfo = array_merge($personalInfo, $moreInfo);
    foreach ($personalInfo as $key => $value) {
        echo $key." : ".$value."<br>"; // ...asocijativne vrednosti padajuce (5)
    }
    print_r($personalInfo); // Array ( [Name] => Milivoje [Age] => 35 [City] => Valjevo [State] => Serbia [Weight] => 95 )
    echo "<br>";
    // print only keys
    print_r(array_keys($personalInfo)); // Array ( [0] => Name [1] => Age [2] => City [3] => State [4] => Weight )
    echo "<br>";
    // print only values
    print_r(array_values($personalInfo)); // Array ( [0] => Milivoje [1] => 35 [2] => Valjevo [3] => Serbia [4] => 95 )
    echo "<br>";

    $cars = array('Volkswagen','Audi','Mercedes');
    // add value in array
    array_push($cars, 'Volvo');
    print_r($cars); // Array ( [0] => Volkswagen [1] => Audi [2] => Mercedes [3] => Volvo )
    echo "<br>";
    // search inside of an array
    echo array_search("Mercedes", $cars)."<br>"; // 2
    // count the number of items in an array
    echo count($cars)."<br>"; // 4
    echo "<br>---------------------------------<br>";
// random number functions
    echo rand()."<br>"; // 253727200
    echo getrandmax()."<br>"; // 2147483647
    echo rand(1, 10)."<br>"; // 2 (1 - 10)
    $min = 2;
    $max = 15;
    echo rand($min, $max)."<br>"; // 10

?>
    
</body>
</html>