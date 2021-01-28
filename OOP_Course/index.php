<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    // GET magic method 
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property."<br>";
        }
    }
    // SET magic method
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
}
$user = new User('Milivoje', 35);
//echo $user->getName()."<br>";
$user->__set('name', 'Nada');
echo $user->__get('name')."<br>";

