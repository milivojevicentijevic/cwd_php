<?php

if(isset($_POST['submit'])) {
    // Add database connection
    require 'database.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPassword'];
}

?>