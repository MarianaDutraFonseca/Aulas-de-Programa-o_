<?php

    class ContaBancaria {

    private $titular;
    private $saldo = 0;

    public function setTitular($titular) {
        if (trim($titular) != "") {
            $this->titular = $titular;
        } else {
            echo "Titular inválido!<br>";
        }
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito realizado com sucesso!<br>";
        } else {
            echo "Valor de depósito inválido!<br>";
        }
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso!<br>";
        } else {
            echo "Saldo insuficiente!<br>";
        }
    }

    public function consultarSaldo() {
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ",", ".") . "<br>";
    }
}

echo "<h3>Conta Bancária</h3>";
echo "Titular: Mariana Dutra Fonseca.<br>";
$conta = new ContaBancaria();
$conta->setTitular("Mariana");
$conta->depositar(500);
$conta->sacar(200);
$conta->sacar(400);
$conta->consultarSaldo();

?>