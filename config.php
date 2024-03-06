<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword= '' ;
$dbName = 'trabalho';

$conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){

    echo "Erro no servidor";

}else{ 
    echo "Conexao efetuada com sucesso";

}


?>