<?php

class Produto{
public $NOME;
public $PRECO;
public $ESTOQUE;
    public function exibir(){
        return "Produto: " . $this->NOME . "<br>" . "Preço: R$ " . $this->PRECO . "<br>" . "Estoque: " . $this->ESTOQUE . ".<br>";
    }
    public function adicionarEstoque($quantidade){
        $this->ESTOQUE += $quantidade;
    }
    public function removerEstoque($quantidade){
        if($quantidade <= $this->ESTOQUE){
            $this->ESTOQUE -= $quantidade;
        } else {
            echo "Quantidade insuficiente em estoque para remoção.<br>";
        }
    }
}

$p1 = new Produto();
$p1->NOME = "New Balance 530";
$p1->PRECO = 504.99;
$p1->ESTOQUE = 10;
echo $p1->exibir() . "<br><br>";
$p1->adicionarEstoque(5);
echo "Após adicionar 5 unidades ao estoque:<br>";
echo $p1->exibir() . "<br>";
$p1->removerEstoque(3);
echo "Após remover 3 unidades do estoque:<br>";
echo $p1->exibir() . "<br>";

echo "____________________________<br><br>";

$p2 = new Produto();
$p2->NOME = "Nike Downshifter 3";
$p2->PRECO = 350.90;
$p2->ESTOQUE = 20;
echo $p2->exibir() . "<br>";
$p2->adicionarEstoque(10);
echo "Após adicionar 10 unidades ao estoque:<br>";
echo $p2->exibir() . "<br>";
$p2->removerEstoque(5);
echo "Após remover 5 unidades do estoque:<br>";
echo $p2->exibir() . "<br>";
?>