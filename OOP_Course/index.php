<?php

class User 
{
    // properties
    private $name;
    private $age;

    // constructor
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function __toString()
    {
        return "Name: ".$this->name."<br> Age: ".$this->age."<br>";
    }
    // getters and setters for name and age
    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name."<br>";
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function getAge() {
        return $this->age."<br>";
    }
}

$user = new User("Jovan", 46);
echo $user;
