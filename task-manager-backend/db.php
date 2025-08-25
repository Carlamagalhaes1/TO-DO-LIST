<?php 

$host = '127.0.0.1';
$dbnome = 'atividaes';
$user = 'root';
$pass = 'carla2006';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}




?>