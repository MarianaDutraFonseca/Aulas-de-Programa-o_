<?php

// herança, polimorfismo, classes abstratas

class Pessoa{
    public $nome;
    public $idade;

    public function apresentar(){
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

class Estudante extends Pessoa { 
    public $escola; 
 
    public function apresentar() { 
        return parent::apresentar() . " Estudo na escola {$this->escola}."; 
    }
}

$aluno = new Estudante(); 
$aluno->nome = "Fulaninho"; 
$aluno->idade = 18; 
$aluno->escola = "IFFar"; 
echo $aluno->apresentar(); 
?>