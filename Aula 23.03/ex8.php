<?php

class Circulo {
public $RAIO;
    public function Area(){
        return pi() * pow($this->RAIO, 2);
    }
    public function Circunferencia(){
        return 2 * pi() * $this->RAIO;
    }
}

$c1 = new Circulo();
$c1->RAIO = 5;
echo "Circulo 1:<br>";
echo "Raio: " . $c1->RAIO . ".<br>";
    echo "Área: " . $c1->Area() . ".<br>";
    echo "Circunferência: " . $c1->Circunferencia() . ".<br><br>";

$c2 = new Circulo();
$c2->RAIO = 3;
echo "Circulo 2:<br>";
echo "Raio: " . $c2->RAIO . ".<br>";
    echo "Área: " . $c2->Area() . ".<br>";
    echo "Circunferência: " . $c2->Circunferencia() . ".<br>";
?>