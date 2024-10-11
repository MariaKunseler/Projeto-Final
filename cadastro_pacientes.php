<?php
session_start();
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$mot_consul = $_POST['mot_consul'];
$anotacoes = $_POST['anotacoes'];
$prescricao = $_POST['prescricao'];

$conexao = mysqli_connect('localhost','root','','teste');

$sql = "insert into pacientes (nome, idade, motivo_da_consulta, anotacoes_do_atendimento, prescricao)
values ('$nome', '$idade','$mot_consul','$anotacoes','$prescricao')";

echo "Cadastrado com sucesso!";

$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);


?>