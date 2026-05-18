<?php

    class Aluno {

    private $nome;
    private $nota1;
    private $nota2;

    public function setNome($nome) {
        if (trim($nome) != "") {
            $this->nome = $nome;
        } else {
            echo "Nome inválido!<br>";
        }
    }

    public function setNota1($nota1) {
        if ($nota1 >= 0 && $nota1 <= 10) {
            $this->nota1 = $nota1;
        } else {
            echo "Nota 1 inválida!<br>";
        }
    }

    public function setNota2($nota2) {
        if ($nota2 >= 0 && $nota2 <= 10) {
            $this->nota2 = $nota2;
        } else {
            echo "Nota 2 inválida!<br>";
        }
    }

    public function calcularMedia() {
        return round(($this->nota1 + $this->nota2) / 2, 1);
    }

    public function verificarSituacao() {
        $media = $this->calcularMedia();

        if ($media >= 7) {
            return "Aprovado";
        } elseif ($media >= 5) {
            return "Recuperação";
        } else {
            return "Reprovado";
        }
    }

    public function mostrarAluno() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Nota 1: " . $this->nota1 . "<br>";
        echo "Nota 2: " . $this->nota2 . "<br>";
        echo "Média: " . $this->calcularMedia() . "<br>";
        echo "Situação: " . $this->verificarSituacao() . "<br>";
    }
}

$aluno = new Aluno();
$aluno->setNome("Theodoro");
$aluno->setNota1(6);
$aluno->setNota2(8);
echo "<h3>Cadastro de Aluno</h3>";
$aluno->mostrarAluno();

?>