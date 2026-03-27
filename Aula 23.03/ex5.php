<?php

class Retangulo{
public $LARGURA;
public $COMPRIMENTO;
    public function Area(){
        return $this->LARGURA * $this->COMPRIMENTO;
    }

    public function Perimetro(){
        return 2 * ($this->LARGURA + $this->COMPRIMENTO);
    }
}

$rt1 = new Retangulo();
$rt1->LARGURA = 5;
$rt1->COMPRIMENTO = 10;
echo "RT 1:<br>";
echo "Largura: " . $rt1->LARGURA . ".<br>";
echo "Comprimento: " . $rt1->COMPRIMENTO . ".<br>";
echo "Área do Retângulo: " . $rt1->Area() . ".<br>";
echo "Perímetro do Retângulo: " . $rt1->Perimetro() . ".<br><br>";

$rt2 = new Retangulo();
$rt2->LARGURA = 3;
$rt2->COMPRIMENTO = 7;
echo "RT 2:<br>";
echo "Largura: " . $rt2->LARGURA . ".<br>";
echo "Comprimento: " . $rt2->COMPRIMENTO . ".<br>";
echo "Área do Retângulo: " . $rt2->Area() . ".<br>";
echo "Perímetro do Retângulo: " . $rt2->Perimetro() . ".<br>";
?>