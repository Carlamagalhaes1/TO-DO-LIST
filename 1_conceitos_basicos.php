<?php
echo "Variáveis e tipos de dados <br>";
echo "teste <br>";



//variaveis
$nome = "carla";
echo "Meu nome é $nome <br>";

//Concatenação - união de strings

$sobrenome = "Magalhães";
$nomeCompleto =$nome . " " . $sobrenome ;
echo "Meu nome completo é $nomeCompleto <br>";

$irmãos = "Saulo, Davi";
$pais = ",Carlos e sirlândia";

$familia = $irmãos . " " . $pais;
echo "Minha familia são $familia <br> ";


$idade = 19;
$somaIdade  = $idade + 5;

echo  "minha idade é $somaIdade!<br><br>";

//float - nuumetos quebrados
$altura = 1.72;

echo "minha altura é $altura <br><br>";

//booleano true or false

$verdadeiro = true;
$falso = false;

echo "Esse é meu verdadeiro ($verdadeiro), e esse é meu falso ($falso) <br><br>";

//arrays 

$meuArray = [ "carla", "saulo", "davi" ];

echo"O primeiro nome é =>  $meuArray[0]<br><br>";
echo"O segundo nome é  $meuArray[1]<br>";

$meuArray[] = "stila";
$meuArray[] = "carlos";
echo "o elemento que eu add foi $meuArray[3]<br>";
echo "o segundo elemento que eu add foi $meuArray[4]<br>";

//operadores

echo "Soma " . (10 + 5) . "<br>";

$a = 10;
$b = 10;

echo "A subtração é:" . ($a - $b) . "<br>";
echo "A divisão é:" . ($a / $b) . "<br>";
echo "A multiplicação é:" . ($a * $b) ." <br>";

// ==, ===, !=
$c = "12";

echo "Valor é " . ($c == $a ? "verdadeiro " :"falso") . "<br>";
echo "o indentico é  " . ($a === $b ? "vdd" : "falso") . "<br>";
echo "o valor é diferente " . ($a != $b ? "vdd" : "falso") . "<br>"
?>



