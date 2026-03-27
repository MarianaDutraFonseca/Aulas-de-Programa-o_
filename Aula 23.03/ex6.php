<?php

class Conta{
public $NUMERO;
public $TITULAR;
public $SALDO;

    public function Depositar($valor){
        $this->SALDO += $valor;
    }

    public function Sacar($valor){
        if($valor <= $this->SALDO){
            $this->SALDO -= $valor;
        } else {
            echo "Saldo insuficiente para saque.<br>";
        }
    }

    public function Exibir(){
        echo "Saldo atual: R$ " . $this->SALDO . ".<br><br>";
    }
}

$conta1 = new Conta();
$conta1->NUMERO = "23060-8";
$conta1->TITULAR = "Mariana Dutra Ferrari";
$conta1->SALDO = 2500;
echo "Número da Conta: " . $conta1->NUMERO . ".<br>";
echo "Titular: " . $conta1->TITULAR . ".<br>";
    $conta1->Exibir();
    $conta1->Depositar(500);
    echo "Após depósito de R$ 500:<br>";
    $conta1->Exibir();
    $conta1->Sacar(200);
    echo "Após saque de R$ 200:<br>";
    $conta1->Exibir();

echo "____________________________<br><br>";

$conta2 = new Conta();
$conta2->NUMERO = "08090-8";
$conta2->TITULAR = "Theo dos Anjos Machado";
$conta2->SALDO = 2000;
echo "Número da Conta: " . $conta2->NUMERO . ".<br>";
echo "Titular: " . $conta2->TITULAR . ".<br>";
    $conta2->Exibir();
    $conta2->Depositar(1000);
    echo "Após depósito de R$ 1000:<br>";
    $conta2->Exibir();
    $conta2->Sacar(500);
    echo "Após saque de R$ 500:<br>";
    $conta2->Exibir();
?>