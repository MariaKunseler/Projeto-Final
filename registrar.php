<?php
$gmail = $_POST['gmail'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$conexao = mysqli_connect('localhost','root','','teste');

$sql = "insert into usuarios (usuario, gmail, senha)
values ('$usuario', '$gmail','$senha')";


$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);

?>