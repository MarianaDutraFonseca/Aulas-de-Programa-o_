<?php

class Animal{
public $TAMANHO;
public $COR;
public $NumeroPatas;
public $PELAGEM;

    public function andar (){
        echo "Andando";}

    public function falar (){
        echo "Falando";}

    public function comer (){
        echo "Comendo";}
}

$GatoPreto = new Animal();
$GatoPreto->NumeroPatas = "4";
$GatoPreto->PELAGEM = "baixa";
$GatoPreto->TAMANHO = "60";
$GatoPreto->COR = "preto";

    echo "O gato preto tem a cor " . $GatoPreto->COR . ".<br>";
    echo "O gato preto tem " . $GatoPreto->NumeroPatas . " patas. <br>";
    echo "O gato preto tem pelagem " . $GatoPreto->PELAGEM . ".<br>";
    echo "O gato preto tem tamanho " . $GatoPreto->TAMANHO . " cm.<br>";
    $GatoPreto->falar();

echo "<br><br>";

$LeoLeclerc = new Animal();
$LeoLeclerc->NumeroPatas = "4";
$LeoLeclerc->PELAGEM = "média";
$LeoLeclerc->TAMANHO = "40";
$LeoLeclerc->COR = "caramelo";

    echo "O Leo Leclerc tem a cor " . $LeoLeclerc->COR . ".<br>";
    echo "O Leo Leclerc tem " . $LeoLeclerc->NumeroPatas . " patas. <br>";
    echo "Leo Leclerc tem pelagem " . $LeoLeclerc->PELAGEM . ".<br>";
    echo "Leo Leclerc tem tamanho " . $LeoLeclerc->TAMANHO . " cm.<br>";
    $LeoLeclerc->falar();




































?>