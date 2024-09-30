# Programação Orientada a Objeto com PHP

## Introdução

A Programação Orientada a Objetos (POO) é um paradigma essencial no desenvolvimento de software, oferecendo uma abordagem estruturada e organizada para modelar sistemas complexos. No contexto do PHP, a POO desempenha um papel fundamental na criação de aplicativos robustos e escaláveis. Neste artigo, vamos explorar os conceitos básicos da POO em PHP, destacando suas características e fornecendo exemplos práticos.

## Conceitos Básicos de POO em PHP

Assim como em outras linguagens orientadas a objetos, em PHP, a POO envolve a criação de classes e objetos que representam entidades do mundo real. Vamos começar com um exemplo simples:

```php
// Definindo uma classe Pessoa
class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        echo "Olá, eu sou " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

// Criando um objeto Pessoa
$pessoa = new Pessoa("Alice", 30);
$pessoa->apresentar();
```

Neste exemplo, criamos uma classe Pessoa com um construtor e um método apresentar.

## Encapsulamento em PHP

Na programação orientada a objetos é possível utilizar do encapsulamento dando permissões de acessos aos atributos das classes. Assim podemos dizer quem pode acessar seus atributos diretamente ou não. São eles:


**_public_:** A palavra chave public informa que a propriedade ou o método são públicos, ou seja, qualquer um pode acessar (desde subclasses como outras classes que a estão instanciando).

**_private_:** Já a palavra chave private informa que a propriedade ou método só podem ser acessados internamente na classe. Nem seus filhos podem acessá-lo.

**_protected_:** Enquanto isso protected indica que subclasses podem acessar, mas outras classes ou funções não têm essa permissão.

O PHP oferece suporte para encapsulamento usando modificadores de acesso, como public, private e protected. 

Vejamos um exemplo:

```php
// Definindo uma classe ContaBancaria
class ContaBancaria {
    private $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
}
// Utilizando a classe ContaBancaria
$conta = new ContaBancaria(1000);
echo $conta->getSaldo(); // Saída: 1000
$conta->depositar(500);
$conta->sacar(200);
echo $conta->getSaldo(); // Saída: 1300
```

Neste exemplo, o saldo da conta bancária é encapsulado usando o modificador private.

Neste outro exemplo:

```php
class Pessoa {
  
    public $nome = "Benedito"; //Atributo público
    protected $idade = 39; //Atributo protegido
    private $senha = "123456"; //Atributo privado
    
    public function verDados() {
        echo $this->nome . "\n";
        echo $this->idade . "\n";
        echo $this->senha . "\n";
    }  
 }
 
 $objeto = new Pessoa();
 echo $objeto->nome; //O atributo $nome é acessado normalmente (public)
 echo $objeto->idade; //O atributo $idade não pode ser acessado (protected)
 echo $objeto->senha; //O atributo $senha não pode ser acessado (private)
 
 /*Os valores dos atributos nome, idade e senha serão mostrados, pois o método que 
 mostram eles é público */
 $objeto->verDados();
 
 //Classe Programador herda a classe Pessoa
 class Programador extends Pessoa { 

 }
 
 //Instância da classe Programador
 $objeto2 = new Programador();
 
 /* Os atributos nome e idade serão mostrados normalmente, porém o atributo senha, não. 
 Isso acontece porque o objeto instanciou a classe Programador que herdou a classe Pessoa. 
 Atributos e métodos privados só são visíveis dentro da mesma classe */
 $objeto2->verDados();
```

O atributo protected só pode ser acessado dentro da classe ou de quem herdar a classe (classe filha, classe extendida).
O atributo private está um nível acima de proteção em relação ao protected.

Nem as classes herdeiras conseguirão acessar os atributos e métodos privados. O acesso é permitido apenas de dentro da classe.

## Herança e Polimorfismo em PHP

PHP suporta herança e polimorfismo de forma nativa. Vejamos um exemplo:

```php
// Definindo uma classe Animal
class Animal {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
    
    public function fazerBarulho() {
        echo "Barulho genérico de animal.";
    }
}
// Definindo uma classe Cachorro que estende Animal
class Cachorro extends Animal {
    public function fazerBarulho() {
        echo "Au au!";
    }
}
// Utilizando a classe Cachorro
$cachorro = new Cachorro("Rex");
$cachorro->fazerBarulho(); // Saída: Au au!
```

Neste exemplo, definimos as classes Animal e Cachorro, demonstrando herança e polimorfismo.

## Conclusão

Em PHP, a Programação Orientada a Objetos é uma parte essencial do desenvolvimento de software. Com o uso de classes, modificadores de acesso, herança e polimorfismo, é possível criar sistemas robustos e escaláveis. Ao entender os conceitos apresentados neste artigo, os desenvolvedores PHP estarão mais preparados para construir aplicações eficientes e organizadas, aproveitando os benefícios da POO.

Até a próxima!