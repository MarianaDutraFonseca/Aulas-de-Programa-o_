<?php

    class Produto {

    private $nome;
    private $preco;
    private $quantidade;

    public function setNome($nome) {
        $nome = trim($nome);
        if ($nome != "") {
            $this->nome = $nome;
        } else {
            echo "Nome inválido!<br>";
        }
    }

    public function setPreco($preco) {
        if (is_numeric($preco) && $preco > 0) {
            $this->preco = $preco;
        } else {
            echo "Preço inválido!<br>";
        }
    }

    public function setQuantidade($quantidade) {
        if (is_numeric($quantidade) && $quantidade >= 0) {
            $this->quantidade = $quantidade;
        } else {
            echo "Quantidade inválida!<br>";
        }
    }

    public function mostrarProduto() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ",", ".") . "<br>";
        echo "Quantidade em estoque: " . $this->quantidade . "<br>";
    }
}

$produto = new Produto();
$produto->setNome("Notebook");
$produto->setPreco(3500);
$produto->setQuantidade(10);
echo "<h3>Dados do Produto</h3>";
$produto->mostrarProduto();

?>