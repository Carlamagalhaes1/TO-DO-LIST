<?php

//ESTRUTURAS CONDICIONAIS

$idade = 18;

if ($idade >= 18){
    echo "Ele é de maior <br>";
} else {
echo " ele n é";
};

$velocidade = 100;

if ($velocidade >= 60 && $velocidade <= 80) {
    echo "Velocidade aceita!";
} elseif ($velocidade > 80 && $velocidade <= 99) {
    echo "Acima do limite";
} elseif ($velocidade >= 100) {
    echo "Muito rápido";
} else {
    echo "Muito lento";
}











?>