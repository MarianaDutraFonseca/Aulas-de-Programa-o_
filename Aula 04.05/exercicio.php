<?php
class Funcionário{
    private $nome;
    private $idade;
    private $salario;

    public function setNome($n){
    if(!empty($n)){
        $this->nome = $n
    }else{
        echo "Nome inválido";
    }
    }
}