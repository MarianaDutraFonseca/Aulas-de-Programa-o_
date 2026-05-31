<?php

class Retangulo{
    private $largura;
    private $altura;

    public function __construct($largura,$altura){
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro(){
        return 2 * ($this->largura + $this->altura);
    }
}

$r1 = new Retangulo(10,5);
$r2 = new Retangulo(6,4);
echo "Retângulo 1 - Área: " . $r1->calcularArea() . " - Perímetro: " . $r1->calcularPerimetro() . "<br>";
echo "Retângulo 2 - Área: " . $r2->calcularArea() . " - Perímetro: " . $r2->calcularPerimetro() . "<br><br>";

if($r1->calcularArea() > $r2->calcularArea()){
    echo "Retângulo 1 possui maior área";
}else{
    echo "Retângulo 2 possui maior área";
}
?>