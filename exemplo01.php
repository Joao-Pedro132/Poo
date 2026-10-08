<?php

// criação de classe no php
class Carro{
    // atributos
    public string $modelo;
    public string $cor;
    public string $marca;
    public float $velocidade;
    public bool $temTetoSolar; 

    // Metódos
    public function ligar(){
        echo "O carro ligou...<br>";
    }

    public function acelerar($velocidadeCarro){
        $this->velocidade = $this->velocidade + $velocidadeCarro;
        echo"O carro acelerou...<br>";
        echo"Velocidade do carro: " . $this->velocidade . " km/h<br>";
    }

    public function frear($frearCarro){
        $this->velocidade = $this->velocidade - $frearCarro;

        if ($this->velocidade < 0 ){
            $this->velocidade = 0;
        }
        echo "O carro freiou...<br>";
        echo "Velocidade do carro: " . $this->velocidade . "km/h<br>";
    }

    public function desligar(){
        while($this->velocidade > 0){
            $this->frear(10);
        }

        echo"O carro foi desligado.";
    }
}

// Criação de objeto da classe Carro
$carro1 = new Carro();

// Colocando valores no objeto carro1
$carro1->modelo = 'Astra';
$carro1->cor = 'Preto';
$carro1->marca = 'Chevrolet';
$carro1->velocidade = 0;
$carro1->temTetoSolar = false;


// Criando objeto carro 2
$carro2 = new Carro();

// Colocando atribultos no objeto carro2
$carro2->modelo = 'chevette';
$carro2->cor = 'Roxo';
$carro2->marca = 'Chevrolet';
$carro2->velocidade = 0;
$carro2->temTetoSolar = true;


// Exibindo informações do objeto carro1
echo "<p>Modelo do carro 1: " .  $carro1->modelo . "</P>";
echo "<p>Cor do carro 1: " . $carro1->cor . "</p>";
echo "<p>Marca do carro 1: " . $carro1->marca . "</p>";
echo "<p>Velocidade do carro 1: " . $carro1->velocidade . " km/h</p>";
echo "<p>Teto solar do carro 1: " . ($carro1->temTetoSolar ? 'Tem teto solar' :  'Não tem Teto Solar') . "</p>";
$carro1->ligar();
echo"<br>";
// chamando método de acelerar o objeto carro 1
$carro1->acelerar(50);
$carro1->acelerar(100);

$carro1->frear(50);

$carro1->desligar();

echo "<hr>";

// exibindo informações do carro 2

echo "<p>Modelo do carro 2: " .  $carro2->modelo . "</P>";
echo "<p>Cor do carro 2: " . $carro2->cor . "</p>";
echo "<p>Marca do carro 2: " . $carro2->marca . "</p>";
echo "<p>Velocidade do carro 2: " . $carro2->velocidade . " km/h</p>";
echo "<p>Teto solar do carro 2: " . ($carro2->temTetoSolar ? 'Tem teto solar' :  'Não tem Teto Solar') . "</p>";
echo"<br>";

// métodos do carro 2
$carro2->ligar();
$carro2->acelerar(80);
$carro2->acelerar(80);

$carro2->frear(60);

$carro2->desligar();

?>