<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>
<?php
// how to upload files
// 1. upload it to the root    
// 2. directly to the database (later)

echo $name = $_FILES['file']['name']."<br>";
echo $type = $_FILES['file']['type']."<br>";
echo $tmp_location = $_FILES['file']['tmp_name']."<br>";
echo $error = $_FILES['file']['error']."<br>";

?>
<form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">SUBMIT</button>
</form>
</body>
</html>