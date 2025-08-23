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

echo "Esse é meu verdadeiro ($verdadeiro), e esse é meu falso ($falso) <br><br>"


?>



