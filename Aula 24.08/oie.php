<?php
class Produto {

    public string $nome;
    public float $preco;
    public int $quantidade;

    public function adicionarEstoque(int $qtd): void {
        $this->quantidade += $qtd;
    }
    public function removerEstoque(int $qtd): bool {
        if ($qtd <= $this->quantidade) {
            $this->quantidade -= $qtd;
            return true;
        }
        return false;
    }
    public function calcularValorTotal(): float {
        return $this->preco * $this->quantidade;
    }
}
$produto = new Produto();
$produto->nome = "Nugget - Tinta branca";
$produto->preco = 25.90;
$produto->quantidade = 2;

$produto->adicionarEstoque(3);
$produto->removerEstoque(1);

echo "Produto: " . $produto->nome . "<br>";
echo "Preço: R$ " . $produto->preco . "<br>";
echo "Quantidade: " . $produto->quantidade . "<br>";
echo "Valor total: R$ " . $produto->calcularValorTotal();
?>