<?php 

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
echo $conta->getSaldo() . "\n"; // Saída: 1000
$conta->depositar(500); // 1500 
echo $conta->getSaldo() . "\n";
$conta->sacar(200); // 1300
echo $conta->getSaldo(); // Saída: 1300


?>