<?php

abstract class Manager
{
    abstract protected function showProject($project);
}

class Employee extends Manager 
{
    public function showProject($project = "Apple")
    {
        return "I am working in ".$project."<br>";
    }

    public function startProject($project) {
        return $this->showProject($project);
    }
}

$employee = new Employee();
echo $employee->showProject()."<br>";