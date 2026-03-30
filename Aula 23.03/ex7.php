<?php

class Triangulo{
public $BASE;
public $ALTURA;
    public function Area(){
        return ($this->BASE * $this->ALTURA) / 2;
    }
    public function Tipo(){
        if($this->BASE == $this->ALTURA){
            return "Equilátero";
        } else {
            return "Isósceles";
        } if($this->BASE != $this->ALTURA){
            return "Escaleno";
        }
    }
}

$tr1 = new Triangulo();
$tr1->BASE = 5;
$tr1->ALTURA = 10;
echo "Triângulo 1:<br>";
echo "Base: " . $tr1->BASE . ".<br>";
echo "Altura: " . $tr1->ALTURA . ".<br>";
    echo "Área: " . $tr1->Area() . ".<br>";
    echo "Tipo: " . $tr1->Tipo() . ".<br><br>";

$tr2 = new Triangulo();
$tr2->BASE = 3;
$tr2->ALTURA = 3;
echo "Triângulo 2:<br>";
echo "Base: " . $tr2->BASE . ".<br>";
echo "Altura: " . $tr2->ALTURA . ".<br>";
    echo "Área: " . $tr2->Area() . ".<br>";
    echo "Tipo: " . $tr2->Tipo() . ".<br>";
?>