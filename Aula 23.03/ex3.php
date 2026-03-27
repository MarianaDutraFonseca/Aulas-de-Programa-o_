<?php

class Carro{
public $MARCA;
public $MODELO;
public $ANO;
public $COR;
public $VELOCIDADE_MAXIMA;

    public function acelerar(){
        echo "O carro está acelerando.<br>";
    }
    public function frear(){
        echo "O carro está freando.<br>";
    }
    public function exibirInformacoes(){
        echo "Marca: " . $this->MARCA . ".<br>";
        echo "Modelo: " . $this->MODELO . ".<br>";
        echo "Ano: " . $this->ANO . ".<br>";
        echo "Cor: " . $this->COR . ".<br>";
        echo "Velocidade Máxima: " . $this->VELOCIDADE_MAXIMA . " km/h.<br><br>";
    }
}

$carrinho1 = new Carro();
$carrinho1->MARCA = "Honda";
$carrinho1->MODELO = "NSX NA1";
$carrinho1->ANO = 1991;
$carrinho1->COR = "Preto";
$carrinho1->VELOCIDADE_MAXIMA = 270 ;
    $carrinho1->exibirInformacoes();
    $carrinho1->acelerar();
    $carrinho1->frear();

echo "____________________________<br><br>";


$carrinho2 = new Carro();
$carrinho2->MARCA = "Mitsubishi";
$carrinho2->MODELO = "Lancer Evolution V";
$carrinho2->ANO = 1998;
$carrinho2->COR = "Preto";
$carrinho2->VELOCIDADE_MAXIMA = 250;
    $carrinho2->exibirInformacoes();
    $carrinho2->acelerar();
    $carrinho2->frear();