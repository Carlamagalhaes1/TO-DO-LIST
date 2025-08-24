<?php 

//FUNÇÕES

function boasVindas() : void{
    echo "Seja bem vindo  <br>";
}

boasVindas();

function boasVindas2($nome) : void {
    echo "Meu nome é $nome ";
}

$nome = "Carla<br>";
boasVindas2($nome);

function teste($a, $b) : mixed{
    return $a + $b;
}

$resultado = teste(a:4, b:5);

echo "Meu resultado $resultado"
?>