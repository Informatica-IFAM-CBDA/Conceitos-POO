<?php 

// Definindo uma classe Pessoa
class Pessoa {
    private $nome;
    private $idade;
    private $genero;
    private $peso;

    // Construtor que representa os atributos da Classe.
    public function __construct($nome, $idade, $genero, $peso) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
        $this->peso = $peso;
    }

    public function apresentar() {
        echo "Olá, eu sou " . $this->nome . " e tenho " . $this->idade . 
        " anos" . ", sou " . $this->genero . " e peso " . $this->peso;
   
    }
}

// Criando um objeto Pessoa
$pessoa = new Pessoa("Alice", 30, "pardo", "62 kg");
$pessoa->apresentar();

?>