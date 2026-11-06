<?php
try{
    $conexao = new PDO(
        "mysql:host=127.0.0.1;dbname=db_biblios;charset=utf8mb4","root","");
}
catch(PDOException $erro){
    die("erro ao conectar");
}
?>