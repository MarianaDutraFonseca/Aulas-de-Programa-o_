<?php

class Aluno{
public $NOME;
public $MATRICULA;
public $MEDIA;
public $SITUACAO;

    public function situacao(){
        if($this->MEDIA >= 7){
            $this->SITUACAO = "Aprovado";
        } else {
            $this->SITUACAO = "Reprovado";
        }
    }

    public function exibirInformacoes(){
        echo "Nome: " . $this->NOME . ".<br>";
        echo "Matrícula: " . $this->MATRICULA . ".<br>";
        echo "Média: " . $this->MEDIA . ".<br>";
        echo "Situação: " . $this->SITUACAO . ".<br><br>";
    }
}

$aluno1 = new Aluno();
$aluno1->NOME = "Theodoro dos Anjos";
$aluno1->MATRICULA = "20240001";
$aluno1->MEDIA = 9.0;
    $aluno1->situacao();
    $aluno1->exibirInformacoes();

$aluno2 = new Aluno();
$aluno2->NOME = "Fulano de Tal";
$aluno2->MATRICULA = "20240002";
$aluno2->MEDIA = 6.0;
    $aluno2->situacao();
    $aluno2->exibirInformacoes();
?>