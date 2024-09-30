<?php 

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
 //echo $objeto->nome . "\n"; //O atributo $nome é acessado normalmente (public)
 //echo $objeto->idade; //O atributo $idade não pode ser acessado (protected)
 //echo $objeto->senha; //O atributo $senha não pode ser acessado (private)
 
 /*Os valores dos atributos nome, idade e senha serão mostrados, pois o método que 
 mostram eles é público */
 //$objeto->verDados();
 

 //Classe Programador herda a classe Pessoa
 class Programador extends Pessoa { 
    public $senioridade = "Junior";
    private $fomacao = "Analista";
 
 }
 
 //Instância da classe Programador
 $objeto2 = new Programador();
 echo $objeto2->nome . "\n";

 echo $objeto2->senioridade;
 /* Os atributos nome e idade serão mostrados normalmente, porém o atributo senha, não. 
 Isso acontece porque o objeto instanciou a classe Programador que herdou a classe Pessoa. 
 Atributos e métodos privados só são visíveis dentro da mesma classe */
 //$objeto2->verDados();


?>