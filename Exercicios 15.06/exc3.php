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

    public function Dados() {
        echo "Funcionário: " . $this->nome . "<br>";
    }
}

class Gerente extends Funcionario {

    public function Bonus(){
        return $this->salario * 0.20;
    }

    public function Dados() {
        echo "Funcionário: " . $this->nome . " (Gerente).<br>";
        echo "Salário: " . $this->salario . ".<br>";
    }
}

class Desenvolvedor extends Funcionario {

    public function Bonus(){
        return $this->salario * 0.15;
    }

    public function Dados() {
        echo "Funcionário: " . $this->nome . " (Desenvolvedor).<br>";
        echo "Salário: " . $this->salario . ".<br>";
    }
}

$funcionarios = [
    new Gerente ("Theo dos Anjos", 20000),
    new Gerente ("Mariana Dutra", 10000),
    new Desenvolvedor ("Lorenzo Cocco", 8000),
    new Desenvolvedor ("Bruno Beck", 9000),
];

foreach ($funcionarios as $funcionario){
    $funcionario->Dados();
    echo "Bônus: " . $funcionario->Bonus() . ".<br><br>";
}
?>