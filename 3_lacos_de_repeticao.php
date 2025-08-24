<?php 

for ($i = 2; $i <=5; $i++){

    if ($i > 3){
        echo "aqui";
    }
    echo " numero $i <br><br>";
};

for ($j = 20; $j >= 10; $j--) {
    echo "dimiuindo J $j <br>";
}

//while

$frutas = ["maça", "banana"];

foreach ( $frutas as $fruta){
    echo "MInhas frutinhas $fruta <br>";
}

$familias = ["
carla" => 0,
"davi" => 1];



foreach ($familias as $familia => $numeros) {
    echo "dados: $familia e $numeros";  } 


?>
