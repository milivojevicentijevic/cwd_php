<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() {
        return $this->name."<br>";
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getAge() {
        return $this->age."<br>";
    }
    public function setAge($age) {
        $this->age = $age;
    }
}
$user = new User('Milivoje', 35);
echo $user->getName()."<br>";

