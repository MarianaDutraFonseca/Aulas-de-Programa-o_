<?php

    class Funcionario {

    private $nome;
    private $cargo;
    private $salario;

    public function setNome($nome) {
        if (trim($nome) != "") {
            $this->nome = $nome;
        } else {
            echo "Nome inválido!<br>";
        }
    }

    public function setCargo($cargo) {
        if (trim($cargo) != "") {
            $this->cargo = $cargo;
        } else {
            echo "Cargo inválido!<br>";
        }
    }

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo "Salário inválido!<br>";
        }
    }

    public function aumentarSalario($percentual) {
        if ($percentual > 0) {
            $this->salario += ($this->salario * $percentual / 100);
            echo "Salário aumentado com sucesso!<br>";
        } else {
            echo "Percentual inválido!<br>";
        }
    }

    public function mostrarFuncionario() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . $this->cargo . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ",", ".") . "<br>";
    }
}

$funcionario = new Funcionario();
$funcionario->setNome("Lorenzo");
$funcionario->setCargo("Cardiologista");
$funcionario->setSalario(3000);
echo "<h3>Antes do aumento</h3>";
$funcionario->mostrarFuncionario();
$funcionario->aumentarSalario(10);
echo "<h3>Depois do aumento</h3>";
$funcionario->mostrarFuncionario();

?>