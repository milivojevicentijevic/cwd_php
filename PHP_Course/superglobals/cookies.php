<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
<?php
    // small file that webserver stores in the cliend computer

    // Argument cookies
// must
    // name
    // value
    // expire
// mandatory
    // path
    // domain
    // security
// if you do not include an expiration date, the cookie will only be stored for the current session
$time = time() + 86400 * 30;
setcookie("name", "Milivoje", $time);
print_r($_COOKIE);
echo "<br>";
echo $_COOKIE["name"];
?>
</body>
</html>