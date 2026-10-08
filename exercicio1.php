<?php

class Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $taLigado;

    public function ligar(){
        $this->taLigado = true;
        echo"Celular ligado...<br>";
    }

    public function desligar(){
        $this->taLigado = false;
        echo"Celular desligado...<br>";
    }

    public function user($consumo){
        while($this->bateria > 0){
        $this->bateria = $this->bateria - $consumo;
            if ($this->bateria <= 0){
                $this->bateria = 0;
                echo"Bateria fraca...<br>";
                $this->desligar();
                break;
            }
        echo "Bateria: " . $this->bateria . "%<br>";
        }
        
    }

    public function carregar($carga){
        if($this->taLigado == false){
            $this->taLigado == true;
        }
        while($this->bateria < 100){
        $this->bateria = $this->bateria + $carga;
            if($this->bateria >= 100){
            $this->bateria = 100;
            }
        echo "Carregando: " . $this->bateria . "%<br>";
        }
        echo "Celular carregado<br>";
        $this->ligar();
    }
}


$celular1 = new Celular();
$celular1->marca = 'LG';
$celular1->modelo = 'K10';
$celular1->cor = 'Preto';
$celular1->bateria = 20;
$celular1->taLigado = false;

$celular2 = new Celular();
$celular2->marca = 'Motorola';
$celular2->modelo = 'G20';
$celular2->cor = 'Azul';
$celular2->bateria = 60;
$celular2->taLigado = false;

echo"Marca do Celular 1: " . $celular1->marca . "<br>";
echo"Modelo do Celular 1: " . $celular1->modelo . "<br>";
echo"Cor do Celular 1: " . $celular1->cor . "<br>";
echo"Bateria do Celular 1: " . $celular1->bateria . "%<br>";
echo"<br>";

$celular1->ligar();
$celular1->user(5);
$celular1->carregar(10);

echo"<br>";
echo"Marca do Celular 2: " . $celular2->marca . "<br>";
echo"Modelo do Celular 2: " . $celular2->modelo . "<br>";
echo"Cor do Celular 2: " . $celular2->cor . "<br>";
echo"Bateria do Celular 2: " . $celular2->bateria . "%<br>";
echo"<br>";

$celular2->ligar();
$celular2->user(10);
$celular2->carregar(25);
?>