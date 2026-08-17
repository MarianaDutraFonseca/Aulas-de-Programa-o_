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

    Foi usado um $this->nome dentro do static, o que gera o erro fatal, pois o $this não pode ser usado ali.

2. **Por que a variável pseudo-variável $this não funciona dentro de métodos declarados como static?**

    Porque o $this representa o objeto atual da classe, e o static pertence a essa classe e não a um objeto. Para acessar seria necessário uma propriedade static para acessar algo no método static.