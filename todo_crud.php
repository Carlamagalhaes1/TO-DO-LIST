<?php

$host = "localhost";
$usuario = "carla";
$senha = "carla2006";
$banco = "todo_list";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn ->connect_error) {
    die("fala na conecxão com o banco". $conn ->connect_error);


} else{
    echo"funcionou";
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["descricao"] )) {

    $descricao = $conn->real_escape_string($_POST['descricao']);

    $sqlInsert = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";
    if($conn->query($sqlInsert) === TRUE) {
        header("Location: todo_crud.php");
    exit;}
}

$tarefas =[];

if(isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sqlDelete = "DELETE FROM tarefas WHERE id = $id";

    if($conn->query($sqlDelete) === TRUE) {
        header("Location: todo_crud.php");
    exit;}
}

$sqlSelect = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
$result = $conn -> query($sqlSelect);
if($result -> num_rows > 0){
   while ($row = $result -> fetch_assoc()) {
    $tarefas[] = $row;
   }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
</head>
<body>
    <form action="todo_crud.php" method="POST">
        <label for="">Tarefa:</label>
        <input type="text" placeholder="Descreva a tarefa: " name="descricao" required>
        <button type="submit">Adicionar</button>
    </form>

    <h2>Suas Tarefas</h2>
    <?php if(!empty($tarefas)) : ?>
        <ul>
            <?php foreach($tarefas as $tarefa) : ?>
                <li>
                    <?php echo $tarefa['descricao'];?> -

                    <a href="todo_crud.php?delete=<?php echo $tarefa['id']?>">Excluir</a>
                </li>
            <?php endforeach;?>

            
        </ul>
    <?php else: ?>
        <p>Nã ha tarefas.</p>
    <?php endif; ?>    

    
</body>
</html>