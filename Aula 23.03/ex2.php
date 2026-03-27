<?php

class Funcionario{
public $NOME;
public $CARGO;
public $SALARIO;
public $DATA_ADMISSAO;
}

$F1 = new Funcionario();
$F1->NOME = "Theo dos Anjos Machado";
$F1->CARGO = "Gerente de Vendas";
$F1->SALARIO = 5000;
$F1->DATA_ADMISSAO = "08/09/2028";

echo "Nome: " . $F1->NOME . ".<br>";
echo "Cargo: " . $F1->CARGO . ".<br>";
echo "Salário: R$ " . $F1->SALARIO . ".<br>";
echo "Data de Admissão: " . $F1->DATA_ADMISSAO . ".<br>";
echo "Salário Anual: R$ " . ($F1->SALARIO * 12) . ".<br><br>";

$F2 = new Funcionario();
$F2->NOME = "Lorenzo Cocco de barros";
$F2->CARGO = "Faxineiro";
$F2->SALARIO = 1500;
$F2->DATA_ADMISSAO = "09/10/2029";

echo "Nome: " . $F2->NOME . ".<br>";
echo "Cargo: " . $F2->CARGO . ".<br>";
echo "Salário: R$ " . $F2->SALARIO . ".<br>";
echo "Data de Admissão: " . $F2->DATA_ADMISSAO . ".<br>";
echo "Salário Anual: R$ " . ($F2->SALARIO * 12) . ".<br><br>";
?>