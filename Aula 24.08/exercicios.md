## Exercícios Práticos: Métodos, Propriedades e Tipagem em PHP
***Estes exercícios cobrem a criação de classes, definição de propriedades tipadas, parâmetros e retornos de métodos conforme os conceitos de Orientação a Objetos e Type Declarations no PHP moderno.***

1) **Gerenciamento de Estoque de Produto**

    *Objetivo: Criar uma classe chamada Produto para controlar o estoque de uma loja.*

    **Propriedades Tipadas:**

    - string $nome

    - float $preco

    - int $quantidade

    **Métodos Tipados:**

    - adicionarEstoque(int $qtd): void: adiciona a quantidade informada ao estoque atual.

    - removerEstoque(int $qtd): bool: remove a quantidade informada do estoque caso haja saldo suficiente (retorna true). Se a quantidade solicitada for maior que o estoque atual, não altera o estoque e retorna false.

    - calcularValorTotal(): float: retorna o valor total do estoque deste produto (preco * quantidade).


## Resolução
***Exercício 1:***
~~~
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
$produto->nome = "Caderno";
$produto->preco = 15.50;
$produto->quantidade = 10;

$produto->adicionarEstoque(5);
$produto->removerEstoque(3);

echo "Produto: " . $produto->nome . "<br>";
echo "Preço: R$ " . $produto->preco . "<br>";
echo "Quantidade: " . $produto->quantidade . "<br>";
echo "Valor total: R$ " . $produto->calcularValorTotal();
?>
~~~