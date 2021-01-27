<?php
    $file = $_FILES['file'];
    $name = $_FILES['file']['name']; // find file name
    $tmp_name = $_FILES['file']['tmp_name']; // temp loc
    $size = $_FILES['file']['size']; // find file size
    $error = $_FILES['file']['error']; // find errors

    // explode from punctuation mark
    $tempExtension = explode('.',$name);
    $fileExtension = strtolower(end($tempExtension));
    // allowed estensions
    $isAllowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileExtension, $isAllowed)) {
        if ($error === 0) {
            if ($size < 100000) {
                $newFileName = uniqid('', true).".".$fileExtension;
                $fileDestination = "uploads/".$newFileName;
                move_uploaded_file($tmp_name, $fileDestination);
                echo "Congrats!<br>";
                header("Location: files.php?uploadedsuccess"); 
            } else {
                echo "Sorry, your file size is too big.<br>";
            }
        } else {
            echo "Sorry, there was an error. Try it again.<br>";
        }
    } else {
        echo "Sorry, your file type is not accepted<br>";
    }
?>