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

?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">SUBMIT</button>
</form>
</body>
</html>