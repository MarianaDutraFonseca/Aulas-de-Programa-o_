<?php

class Funcionario {
    public $nome;
    public $salario;

    public function __construct ($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function Bonus(){
        return $this->salario * 0.10;
    }
}

class Gerente extends Funcionario {
}

class Desenvolvedor extends Funcionario {
}

$gerente = new Gerente ("Theo dos Anjos", 20000);
echo "Nome: " . $gerente->nome . ".<br>";
echo "Cargo: Gerente. <br>";
echo "Salário: " . $gerente->salario . ".<br>";
echo "Bônus: " . $gerente->Bonus() . ".<br><br>";

$desenvolvedor = new Desenvolvedor ("Lorenzo Cocco", 8000);
echo "Nome: " . $desenvolvedor->nome . ".<br>";
echo "Cargo: Desenvolvedor. <br>";
echo "Salário: " . $desenvolvedor->salario . ".<br>";
echo "Bônus: " . $desenvolvedor->Bonus() . ".<br><br>";
?>