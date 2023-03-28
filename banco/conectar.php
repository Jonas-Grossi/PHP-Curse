<?php
$serverName ="localhost";
$database = "nomeSistema";
$userName = "root";
$password = "senha";

$strcon = mysqli_connect($serverName,$userName,$password,$database);

if(!$strcon){
    die("Falha na Conexao: ".mysqli_connect_error());
}
echo "Sucesso na Conexão";
?>