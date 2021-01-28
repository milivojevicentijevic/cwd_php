<?php

class User 
{
    public $name = "Jovan";
    public $age;
    final public function printName($name) {
        return "My name is ".$name."<br>";
    }
}

class Manager extends User {
    public $name = "David";
}

$manager = new Manager();
echo $manager->printName("Marko");