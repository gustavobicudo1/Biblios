<?php
include "conexao.php";
$nome = $_POST["Nome"];
$idade = $_POST["Idade"];
$telefone = $_POST["Telefone"];
$gmail = $_POST["Gmail"];
$rn = $_POST["Rn"];
$agendamento = $_POST["Agendamento"];

$sql ="INSERT INTO tb_alunos(nome_produto,qnt,preco,categoria)
('$nome','$idade','$telefone','$gmail','$rn','$agendamento');";

if($conexao->query($sql)){
    echo "Aluno registrado";
}else{
    echo "falha";
}
?>