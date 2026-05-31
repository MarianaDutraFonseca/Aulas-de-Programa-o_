<?php

class Estoque {
    private $produtos = [];

    public function adicionarProduto($nome, $quantidade) {

        $this->produtos[] = [
            'nome' => $nome,
            'qtd' => $quantidade
        ];

    }
    public function listarProdutos() {

        foreach ($this->produtos as $p) {
            echo $p['nome'] . ': ' . $p['qtd'] . '<br>';
        }

    }
    public function totalItens() {

        $total = 0;
        foreach ($this->produtos as $p) {
            $total += $p['qtd'];
        }
        return $total;
    }

}

$estoque = new Estoque();
$estoque->adicionarProduto("Notebook", 10);
$estoque->adicionarProduto("Caderno", 15);
$estoque->adicionarProduto("Lapiseira", 5);
echo "<h3>Estoque:</h3>";
$estoque->listarProdutos();
echo "<br>Total de itens: " . $estoque->totalItens();
?>