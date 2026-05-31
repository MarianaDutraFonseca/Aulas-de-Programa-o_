<?php

class Contato{
    private $nome;
    private $telefone;

    public function __construct($nome,$telefone){
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }
}

class Agenda{
    private $contatos = [];

    public function adicionarContato($nome,$telefone){
        $c = new Contato($nome,$telefone);
        $this->contatos[] = $c;
    }

    public function listar(){
        foreach($this->contatos as $c){
            echo $c->getNome()." - ".
                 $c->getTelefone()."<br>";
        }
    }
}

$agenda = new Agenda();
$agenda->adicionarContato("Theodoro","99162-3399");
$agenda->adicionarContato("Bruno","99162-3398");
$agenda->adicionarContato("Lorenzo","98765-4321");
$agenda->listar();
?>