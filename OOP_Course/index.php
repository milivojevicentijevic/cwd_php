<?php

class User
{
    public $name;
    public $email;

    public function welcomeMessage() {
        return "Have a good working day!";
    }
}

class Admin extends User
{
    public $level;
}

$user = new User();
$user->name = "Milivoje";
$user->email = "misagrf@yahoo.com";
echo $user->name. " ".$user->email."<br>";

$admin = new Admin();
$admin->name = "Jovan"; 
$admin->email = "jovanpetar@gmail.com"; 
$admin->level = "SuperAdmin"; 
echo $admin->name." ".$admin->email." ".$admin->level."<br>";
echo $admin->welcomeMessage()."<br>";