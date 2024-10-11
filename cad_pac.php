<?php
$nome = $_POST['nome'];
$dt_nasc = $_POST['dt_nasc'];
$cpf =  $_POST['cpf'];
$endereco =  $_POST['endereco'];
$telefone =  $_POST['telefone'];
$gmail =  $_POST['gmail'];
$estado_civil =  $_POST['estado_civil'];
$ocupacao =  $_POST['ocupacao'];

$conexao = mysqli_connect('localhost','root','','teste');

$sql = "INSERT INTO cadastro_paciente(nome, dt_nasc, cpf, endereco, telefone, gmail, estado_civil, ocupacao)
VALUES ('$nome','$dt_nasc','$cpf','$endereco','$telefone','$gmail','$estado_civil','$ocupacao')";

echo "Cadastrado com sucesso!";

$executar = mysqli_query($conexao, $sql);
$fechar = mysqli_close($conexao);
?>
