1. **O que é encapsulamento?**
    - ***O que significa encapsular dados em uma classe?***
        Significa proteger os atributos da classe e permitir acesso restrito por métodos.

    - ***Qual é a diferença entre um atributo public, protected e private?***
    **public** pode ser acessado de qualquer lugar; **protected** pode ser acessado pela própria classe e pelas classes filhas; **private** só pode ser acessado dentro daprópria classe.

    - ***Por que não é boa prática deixar todos os atributos como public?***
    Porque qualquer paret do programa pode alterar os dados, o que pode levar a erros e falta de controle.

2. **Para que servem os métodos get e set?**
    - ***Por que usamos getAtributo() ao invés de acessar $objeto->atributo diretamente?***
    Porque o get acessa os atributos privados de forma segura.

    - ***O que um método set pode fazer além de simplesmente atribuir um valor?***
    O set pode validar os dados antes de armazenalos (mesmo exemplo do de baixo).

    - ***Dê um exemplo prático de validação dentro de um set.*** 
    Exemplo está junto na pasta.ar

3. **Verdadeiro ou Falso — encapsulamento**
**Classifique cada afirmação como Verdadeiro (V) ou Falso (F) e justifique:**
    - **(F)** **"Um atributo private pode ser lido diretamente fora da classe."** (só pode ser acesado dentro da própria classe, para poder ler usamos o get)*
    - **(V)** **"Getters e setters so fazem sentido quando os atributos sao private."** (quando os atributos são privados não podem ser acessados direto, usamos o get e set para controlar a leitura e a edição dos dados)*
    - **(V)** **"Encapsulamento aumenta a seguranca e a manutencao do codigo."** (o encapsulamento protege os dados e permite validar informações antes de armazenalas)*
    - **(V)** **"E possivel ter um getter sem ter um setter para o mesmo atributo."** (as vezes permitimos apenas a leitura de um atributo mas não a edição, nesse caso criamos apenass o get)*

4. ***Erro: acesso a atributo privado***
    **echo $p->nome;**  
    *O atributo é private.*
    A correção está na pasta.

5. ***Erro: variável sem $this***
    - **echo 'Aluno: ' . $nome . ' - Nota: ' . $nota;**  
    *Os atributos da classe devem ser acessados com $this->.*
    A correção está na pasta.

6. ***Erro: setter não bloqueia o valor inválido***
    - **$this->idade = $idade;**  
    *O código verifica a idade inválida mas continua executando.*
    A correção está na pasta.

7. ***Erro: instanciação sem new***
    - **$c = Carro('Fusca');**  
    *O uso de new é obrigatório para criar um objeto.*
    A correção está na pasta.

***8; 9; 10; 11; 12; 13; 14 e 15 estão feitas na pasta.***