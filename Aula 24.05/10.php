<?php

class Aluno{
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome,$nota1,$nota2){
        $this->nome = $nome;
        $this->setNota1($nota1);
        $this->setNota2($nota2);
    }

    public function setNota1($nota){
        if($nota >= 0 && $nota <= 10){
            $this->nota1 = $nota;
        }
    }

    public function setNota2($nota){
        if($nota >= 0 && $nota <= 10){
            $this->nota2 = $nota;
        }
    }

    public function calcularMedia(){
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao(){
        if($this->calcularMedia() >= 5){
            echo "Aprovado";
        }else{
            echo "Reprovado";
        }
    }

    public function getNome(){
        return $this->nome;
    }
}

$a1 = new Aluno("Mariana Dutra", 5, 7);
echo "Aluno 1: " . $a1->getNome() . "<br>";
echo "Média: " . $a1->calcularMedia() . " --- Situação: ";
$a1->situacao();
echo "<br>";
echo "____________________________________________<br><br>";
$a2 = new Aluno("Theo dos Anjos", 8, 8);
echo "Aluno 2: " . $a2->getNome() . "<br>";
echo "Média: " . $a2->calcularMedia() . " --- Situação: ";
$a2->situacao();
?>