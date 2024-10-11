<?php
$id_paciente = $_GET['id_paciente'];

$conexao = mysqli_connect('localhost','root','','teste');
$sql = "DELETE FROM  pacientes WHERE id_paciente='$id_paciente'";

$executar = mysqli_query($conexao,$sql);

if($executar == 1){
    echo "Sucesso!";
}else{
    echo "Erro!";
}

$fechar = mysqli_close($conexao);
?>