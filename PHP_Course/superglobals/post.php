<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<?php
    if(isset($_POST)) {
        echo $_POST['name'].", your form is submitted<br>";
    }
    print_r($_POST);
?>
    <form action="post.php" method="POST">
        <input type="text" name="name">
        <input type="text" name="age">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>