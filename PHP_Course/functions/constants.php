<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $companyName = "Apple";
    $companyName = "Microsoft";
    echo $companyName."<br>"; // Microsoft

    define('COMPANY_NAME', 'Apple');
    echo COMPANY_NAME."<br>";; // Apple
    
    const MY_NAME = "Milivoje";
    echo MY_NAME."<br>"; // Milivoje
?>
</body>
</html>