# EXERCÍCIO 1
##### O código tenta criar uma hierarquia de animais, mas contém 3 erros. Identifique-os, marque as linhas com erro e escreva a correção no espaço abaixo. 
- **Erro 1:** A palavra certa é extends, e não extend. ***class Cachorro extends Animal {***
- **Erro 2:** O certo seria *__construct()* (com dois underlines). ***parent::__construct($nome, "Au au");*** 
- **Erro 3:** O atributo **nome** é protected. Poderia ser criado um get, e chamar um ***echo $dog->getNome();***
```php
public function getNome(){
    return $this->nome;
}
```

# EXERCÍCIO 2
##### Preencha os espaços em branco (_____) para que o código funcione corretamente. Cada _____ representa uma ou mais palavras.
***abstract*** class Forma { 
___________
***abstract*** public function calcularArea(): float;
___________
return "Forma: " . ***static::class***
___________
class Circulo ***extends*** Forma
___________
***parent***::__construct($cor);
___________
return ***pi()*** * $this->raio **2;
___________
public function calcularArea(): ***float***
___________


# EXERCÍCIO 3
##### Uma empresa tem dois tipos de funcionários: CLT (salário fixo + 13°) e Freelancer (valor por hora). Implemente as classes seguindo as regras abaixo. 

```php
<?php
abstract class Funcionario{

    protected string $nome;
    protected string $departamento;

    public function __construct($nome, $departamento){
        $this->nome = $nome;
        $this->departamento = $departamento;
    }

    abstract public function calcularSalario(): float;

    public function apresentar(): string{
        return $this->nome .
            " | " .
            $this->departamento .
            " | Salário: R$ " .
            $this->calcularSalario();
    }
}

class CLT extends Funcionario{

    private float $salarioBase;

    public function __construct($nome, $departamento, $salarioBase){
        parent::__construct($nome, $departamento);
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario(): float{
        return $this->salarioBase * 1.0833;
    }
}

class Freelancer extends Funcionario{

    private float $valorHora;
    private int $horasTrabalhadas;

    public function __construct($nome, $departamento, $valorHora, $horas){
        parent::__construct($nome, $departamento);
        $this->valorHora = $valorHora;
        $this->horasTrabalhadas = $horas;
    }
    public function calcularSalario(): float{
        return $this->valorHora * $this->horasTrabalhadas;
    }
}

$func1 = new CLT("Ana Silva", "RH", 5000);
$func2 = new Freelancer("Carlos Melo", "TI", 60, 80);
echo $func1->apresentar();
echo "<br>";
echo $func2->apresentar();
```


# EXERCÍCIO 4
**1. O que acontece se você tentar instanciar diretamente uma classe abstrata em PHP?**
a)  O PHP ignora a palavra abstract e instancia normalmente. 
***b)  Ocorre um Fatal Error em tempo de execução.***
c)  O PHP cria a instância mas desabilita os métodos abstratos. 
d)  Gera apenas um aviso (Warning), não um erro fatal.

**2. Analise o trecho abaixo. Qual afirmação está correta?**
```php
abstract class Conta { 
abstract protected function calcularJuros(): float; 
public function exibirSaldo(float $saldo): string { 
return "Saldo com juros: " . ($saldo + $this->calcularJuros()); 
} 
} 
```
a)  A classe filha pode opcionalmente implementar calcularJuros(). 
b)  exibirSaldo() não pode chamar calcularJuros() pois ela é abstract. 
***c)  A classe filha deve implementar calcularJuros() como public ou protected, nunca private.***
d)  Não é possível ter métodos concretos dentro de uma classe abstrata.

**3. Qual a diferença principal entre protected e private em herança?**
a)  Não há diferença; ambos ficam visíveis nas classes filhas. 
b)  private é acessível na classe filha; protected apenas na classe pai. 
***c)  protected é acessível na classe filha e na própria classe; private só na classe onde foi declarado.***
d)  protected é equivalente a public para classes do mesmo arquivo.

**4. Em PHP, uma classe filha pode sobrescrever (override) um método concreto da classe pai?**
a)  Não. Só métodos abstract podem ser sobrescritos. 
***b)  Sim, desde que o método na classe filha tenha a mesma assinatura ou mais permissiva.***
c)  Sim, mas apenas se usar a palavra-chave override antes de function. 
d)  Sim, mas a versão da classe pai é deletada automaticamente. 

# EXERCÍCIO 5
##### O código implementa um sistema de pagamentos. Há 2 erros conceituais sintáticos. Identifique-os e reescreva as linhas corretas.
- **Erro 1:** A classe PagamentoCartao herda de uma classe abstrata: ***class PagamentoCartao extends Pagamento{***, e a classe Pagamento tem ***abstract public function processar(): string;*** mas a PagamentoCartao não tem esse método.
Tem que adicionar: 
    ```
    public function processar(): string{
        return "Pagamento no cartão processado.";
    }
    ```
___

- **Erro 2:** Aparece ***private function processar(): string***, mas na classe abstrata o método é ***public abstract function processar(): string;***.
O certo seria:
    ```
    public function processar(): string{
    return "PIX processado: R$ {$this->valor}";
    }
    ```

# EXERCÍCIO 6
##### Complete os espaços em branco para que a classe Veiculo e Carro funcionem:
- **Correção**

    ***abstract*** class Veiculo {
    ___________
    abstract public function ***tipo***(): string;
    ___________
    ***parent***::__construct($marca, $ano);
    ___________
    public function tipo(): ***string***
    ___________
    public function ***apresentar*** (): string
    ___________
- **Classe Moto**
    ```php
    class Moto extends Veiculo{

        private int $cilindrada;

        public function __construct(
            string $marca,
            int $ano,
            int $cilindrada
        ){
            parent::__construct($marca, $ano);
            $this->cilindrada = $cilindrada;
        }
        public function tipo(): string{
            return "Moto";
        }

        public function apresentar(): string{
            return parent::apresentar() .
                " ({$this->cilindrada}cc)";
        }
    }

    $m = new Moto("Honda", 2022, 650);
    echo $m->apresentar();
    ```