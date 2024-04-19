<?php
declare(strict_types=1);

class calculadora
{
    public $num1;
    public $num2;

    public function __construct(float $newNum1, float $newNum2)
    {
        $this->num1 = $newNum1;
        $this->num2 = $newNum2;
    }

    public function suma()
    {
        return $this->num1 + $this->num2;
    }

    public function resta()
    {
        return $this->num1 - $this->num2;
    }
    
    public function multiplicacion()
    {
        return $this->num1 * $this->num2;
    }

    public function division()
    {
        return $this->num1 / $this->num2;
    }
}

$calculadora1 = new calculadora(5, 5);

echo "<br>";
echo $calculadora1->suma();
echo "<br>";
echo $calculadora1->resta();
echo "<br>";
echo $calculadora1->multiplicacion();
echo "<br>";
echo $calculadora1->division();
