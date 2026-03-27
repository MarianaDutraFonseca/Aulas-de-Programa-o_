<?php

class Livro{
public $TITULO;
public $AUTOR;
public $NUMEROPAGINAS;
public $ANOPUBLICACAO;
}

$livro1 = new Livro();
$livro1->TITULO = "O Oráculo Oculto";
$livro1->AUTOR = "Rick Riordan";
$livro1->NUMEROPAGINAS = 400;
$livro1->ANOPUBLICACAO = 2016;

echo "Título: " . $livro1->TITULO . ".<br>";
echo "Autor: " . $livro1->AUTOR . ".<br>";
echo "Possui " . $livro1->NUMEROPAGINAS . " páginas.<br>";
echo "Ano de Publicação: " . $livro1->ANOPUBLICACAO . ".<br><br>";

$livro2 = new Livro();
$livro2->TITULO = "A Profecia das Sombras";
$livro2->AUTOR = "Rick Riordan";
$livro2->NUMEROPAGINAS = 384;
$livro2->ANOPUBLICACAO = 2017;

echo "Título: " . $livro2->TITULO . ".<br>";
echo "Autor: " . $livro2->AUTOR . ".<br>";
echo "Possui " . $livro2->NUMEROPAGINAS . " páginas.<br>";
echo "Ano de Publicação: " . $livro2->ANOPUBLICACAO . ".<br>";
?>