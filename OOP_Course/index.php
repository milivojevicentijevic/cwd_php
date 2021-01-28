<?php

class User
{
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct() {
        echo "Desctructor works<br>";
    }
    public function myAge() {
        return "My age is ".$this->age."<br>";
    }
}
$user = new User("Milivoje", 35);
echo $user->myAge();

