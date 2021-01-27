<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
<?php
    // good to use for sensitive information
    // session exists as long as the browser is open
    session_start();

    // storing information
    $_SESSION["Name"] = "Milivoje";
    $_SESSION["Age"] = 35;

    echo "Hello ".$_SESSION["Name   "]."<br>";

    session_destroy();
?>
    
</body>
</html>