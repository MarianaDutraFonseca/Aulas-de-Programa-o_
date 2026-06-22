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
        echo "Nome: " . $this->nome . ".<br>";
        echo "Salário: " . $this->salario . ".<br>";
    }
}

class Gerente extends Funcionario {

    public function Bonus(){
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario {

    public function Bonus(){
        return $this->salario * 0.15;
    }
}

$gerente = new Gerente ("Theo dos Anjos", 20000);
echo "Cargo: Gerente. <br>";
$gerente->Dados();
echo "Bônus: " . $gerente->Bonus() . ".<br><br>";

$desenvolvedor = new Desenvolvedor ("Lorenzo Cocco", 8000);
echo "Cargo: Desenvolvedor. <br>";
$gerente->Dados();
echo "Bônus: " . $desenvolvedor->Bonus() . ".<br><br>";
?>