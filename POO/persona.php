<?php

class Persona
{
    private $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($newName)
    {
        $this->name = $newName;
    }
}

$persona1 = new Persona("Javi", 40);

echo $persona1->getName();
echo "<br>";

$persona1->setName("Javier");

echo $persona1->getName();
// var_dump($persona1->name);

class estudiante extends Persona
{
    public $grado;

    function __construct($name, $age, $grado)
    {
        parent::__construct($name, $age);
        $this->grado = $grado;
    }
}

print_r($estudiante1 = new estudiante("Javi", 40, "Astronauta"));