<?php

class Livro{
    private $titulo;
    private $autor;
    private $paginas;

    public function __construct($titulo,$autor,$paginas){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function getTitulo(){ return $this->titulo; }
    public function getAutor(){ return $this->autor; }
    public function getPaginas(){ return $this->paginas; }

    public function setTitulo($titulo){ $this->titulo = $titulo; }
    public function setAutor($autor){ $this->autor = $autor; }
    public function setPaginas($paginas){ $this->paginas = $paginas; }

    public function exibir(){
        echo "Título: ".$this->titulo."<br>";
        echo "Autor: ".$this->autor."<br>";
        echo "Páginas: ".$this->paginas."<br><br>";
    }
}

$l1 = new Livro("As Provações de Apollo - O Oráculo Oculto","Rick Riordan",256);
$l2 = new Livro("As Provações de Apollo - A Profecia das Sombras","Rick Riordan",310);
$l1->exibir();
$l2->exibir();
?>