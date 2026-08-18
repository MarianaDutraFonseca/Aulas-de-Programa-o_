## Exercício 1: Questão Conceitual

- ***Um aluno tentou executar o código PHP abaixo e recebeu um erro fatal do PHP no servidor. Observe atentamente:***


~~~
class Usuario {
    public $nome = "Ana";

    public static function exibirNome() {
        echo $this->nome; // ERRO FATAL!
    }
}

Usuario::exibirNome();
~~~

1. **Qual é o erro cometido no código acima?**

    O método é ***static*** e ele pertence a classe e não a um objeto. Por isso ele não pode ser usado ali, não existe um objeto atual para o $this representar.

2. **Por que a variável pseudo-variável $this não funciona dentro de métodos declarados como static?**

    O ***this*** representa o objeto atual, e métodos static pertencem a sua classe e não a um objeto específico, eles não possuem um ***$this*** para acessar propriedades ou métodos.

- *OBS: alguns lugares fivaram sem o sifrão porque estava dando erro na visualização, estava juntando os textos e eu não achei como arrumar.*


## Exercício 2: Análise de Código

- ***Analise o trecho de código abaixo e responda:***
~~~
class Conversor {
    public static function dolarParaReal($valor) {
        return $valor * 5.00;
    }
}

// Opção A
$v1 = new Conversor();
echo $v1->dolarParaReal(10);

// Opção B
echo Conversor::dolarParaReal(10);
~~~

1. **Questão: Ambas as opções funcionam no PHP, mas qual delas representa a boa prática correta de orientação a objetos ao trabalhar com métodos estáticos? Justifique sua resposta.**
    A certa é a B, pois métodos ***static*** devem ser chamados diretamente pela classe com ***::***. A opção A cria um objeto sem precisar já que o método não depende de instância.


## Exercício 3: Prática de Programação

- ***Escreva em PHP uma classe chamada AcessoSistema com os seguintes requisitos:***

1. *Crie uma propriedade estática privada chamada $totalAcessos iniciando em 0.*
2. *No método construtor __construct(), incremente o valor de $totalAcessos em +1.*
3. *Crie um método estático público getAcessos() que retorne a quantidade de acessos.*
4. *Instancie 4 objetos dessa classe e depois exiba na tela o resultado chamando AcessoSistema::getAcessos().*

~~~
<?php

class AcessoSistema
{
    private static $totalAcessos = 0;
    public function __construct()
    
    {
    self::$totalAcessos++;
    }

    public static function getAcessos()

    {
    return self::$totalAcessos;
    }
}

$ac1 = new AcessoSistema();
$ac2 = new AcessoSistema();
$ac3 = new AcessoSistema();
$ac4 = new AcessoSistema();
echo AcessoSistema::getAcessos();

?>
~~~