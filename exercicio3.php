<?php

class ClasseAula {
    public string $disciplina;
    public string $professor;
    public float $duracao;
    public int $numDeSalas;
    public int $bloco;

    public function exibirInformacoes(){
        echo "Dados da Aula: <br>";
        echo "Disciplina: " . $this->disciplina . "<br>";
        echo "Professor: " . $this->professor . "<br>";
        echo "Duração: " . $this->duracao . "min<br>";
        echo "Número da Sala: " . $this->numDeSalas . "<br>";
        echo "Bloco: " . $this->bloco . "<br>";
    }

    public function trocarProfessor($novo_Professor){
        $this->professor = $novo_Professor;
        echo "Trocando professor...<br>";
        echo "Professor trocado com sucesso!<br>";
    }

    public function alterarLocal($n_sala, $novo_bloco){
        $this->numDeSalas = $n_sala;
        $this->bloco = $novo_bloco;
        echo "Trocando local...<br>";
        echo "Local trocado com sucesso!<br>";
    }
}

$classe1 = new ClasseAula();
$classe1->disciplina = 'LIMA';
$classe1->professor = 'Samuel';
$classe1->duracao = 100;
$classe1->numDeSalas = 5;
$classe1->bloco = 2;

$classe2 = new ClasseAula();
$classe2->disciplina = 'BackEnd';
$classe2->professor = 'Luiz';
$classe2->duracao = 150;
$classe2->numDeSalas = 12;
$classe2->bloco = 6;

// primeiro
echo "<h1>Primeiro</h1><br>";
$classe1->exibirInformacoes();
$classe1->trocarProfessor('João');
$classe1->alterarLocal(1, 4);
$classe1->exibirInformacoes();

// segundo
echo "<h1>Segundo</h1><br>";
$classe2->exibirInformacoes();
$classe2->trocarProfessor('Daniel');
$classe2->alterarLocal(67, 5);
$classe2->exibirInformacoes();
$classe2->trocarProfessor('Gabriel');
$classe2->exibirInformacoes();

?>