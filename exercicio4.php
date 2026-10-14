<?php

class Pedido {
    public int $numero;
    public string $cliente;
    public float $valor;
    public string $status;

    public function adicionarItem($valorItem){
        $this->valor = $this->valor + $valorItem;
        echo "Adicionando item...<br>";
        echo "Item adicionado com sucesso!<br>";
    }

    public function cancelar(){
        $this->status = 'Cancelado!';
        echo "Alterando status...<br>";
        echo "Status alterado com sucesso!<br>";
    }

    public function finalizar(){
        $this->status = 'Finalizado!';
        echo "Alterando status...<br>";
        echo "Status alterado com sucesso!<br>";
    }

    public function exibirResumo(){
        echo "<b>Resumo do pedido:</b><br>";
        echo "Número do pedido: " . $this->numero . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Valor: R$" . number_format($this->valor, 2, ",", ".") . "<br>";
        echo "Status: " . $this->status . "<br>";
    }
}

$pedido1 = new Pedido();
$pedido1->numero = 1;
$pedido1->cliente = 'Jonas';
$pedido1->valor = 0;
$pedido1->status = 'Aguardando...';

$pedido2 = new Pedido();
$pedido2->numero = 2;
$pedido2->cliente = 'Daniel';
$pedido2->valor = 0;
$pedido2->status = 'Aguardando...';

// primeiro
echo "<h1>Primeiro</h1>";
$pedido1->exibirResumo();
$pedido1->adicionarItem(100);
$pedido1->finalizar();
$pedido1->exibirResumo();

// segundo
echo "<h1>Segundo</h1>";
$pedido2->exibirResumo();
$pedido2->adicionarItem(50);
$pedido2->exibirResumo();
$pedido2->adicionarItem(470);
$pedido2->cancelar();
$pedido2->exibirResumo();
?>