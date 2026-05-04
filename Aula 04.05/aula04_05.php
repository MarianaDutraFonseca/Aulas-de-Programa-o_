<?php
class Pessoa {
    private $nome;
    private $idade;

    public function setNome($novoNome){
    if (!empty($n)){
        $this->nome = $novoNome;
    }else {
        echo "Nome inválido!";
    }
    }

    public function getNome(){
    echo $this->nome . "<br><br>";
    }

    public function setIdade($novaIdade){
    if ($novaIdade > 0 && $novaIdade < 120){
        $this->idade = $novaIdade;
    }else {
        echo "";
    }
    }

    public function getIdade(){
    echo $this->idade;
    }
}

$p = new Pessoa();
$p-> setNome("Ana");
$p-> getNome();

$p-> setIdade(-5);
$p-> getIdade();
?>