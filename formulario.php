<?php

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];

    if (strtolower($nome) == 'carla') {
    echo "não pode entrar $nome"; } elseif (!empty($nome)) {
        echo "pode entrar $nome";} else {
            echo "voce n disse o nome";
        }
} 





?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Forms</title>
    
</head>
<body>
    <h1>FORMULÁRIO</h1>
    <form action="formulario.php" method="GET">
        <label for="nome">Seu nome: </label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Enviar</button>
    </form>
    
    
</body>
</html>