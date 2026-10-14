<?php

class ContaBancaria {
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipo;

    public function depositar($deposito){
        $this->saldo = $this->saldo + $deposito;
        echo"Deposito feito com sucesso! <br>";
    }

    public function sacar($valor){
        if ($this->saldo < $valor){
            echo"Tentativa de saque feita no valor de: R$" . Number_format($valor, 2, ",", ".") . "<br>";
            echo"Saldo insuficiente! <br>";
            echo"Selecione um valor menor ou que corresponda ao valor do Saldo! <br>";
        }else{
            $this->saldo = $this->saldo - $valor;
            echo"Tentativa de saque feita no valor de: " . Number_format($valor, 2, ",", ".") . "<br>";
            echo"Saque feito com sucesso! <br>";
        }
    }

    public function consultarSaldo(){
        echo"Saldo atual: R$" . Number_format($this->saldo, 2, ",", ".") . "<br>";
    }
}

$conta1 = new ContaBancaria();
$conta1->titular = 'João Pedro';
$conta1->numero = 1;
$conta1->saldo = 0;
$conta1->tipo = 'Conta corrente';

$conta2 = new ContaBancaria();
$conta2->titular = 'Nicolas';
$conta2->numero = 2;
$conta2->saldo = 200;
$conta2->tipo = 'Conta corrente';

// primeiro
echo"<h1 style='text-align: center;'>Primeiro</h1><br>";
echo"Titular da conta: " . $conta1->titular . "<br>";
echo"Número da conta: " . $conta1->numero . "<br>";
echo"Tipo da conta: " . $conta1->tipo . "<br>";

$conta1->consultarSaldo();
$conta1->depositar(4500);
$conta1->consultarSaldo();
$conta1->sacar(5000);
$conta1->sacar(4000);
$conta1->consultarSaldo();

// segundo

echo"<h1 style='text-align: center;'>Segundo</h1><br>";
echo"Titular da conta: " . $conta2->titular . "<br>";
echo"Número da conta: " . $conta2->numero . "<br>";
echo"Tipo da conta: " . $conta2->tipo . "<br>";

$conta2->consultarSaldo();
$conta2->depositar(101000);
$conta2->consultarSaldo();
$conta2->sacar(53000);
$conta2->consultarSaldo();
?>