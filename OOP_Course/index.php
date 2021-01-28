<?php

class User
{
    private static $nextId = 0;
    private $myId;

    public static function printId() {
        return "User id is: ".self::$nextId."<br>";
    }
}
/*
$user = new User();
$user->myId = 10;
echo $user->myId."<br>";
*/
echo User::printId();