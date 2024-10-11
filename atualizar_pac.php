<?php
$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$dt_nasc = $_POST['dt_nasc'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$gmail = $_POST['gmail'];
$estado_civil = $_POST['estado_civil'];
$ocupacao = $_POST['ocupacao'];

$conexao = mysqli_connect('localhost','root','','teste');
$sql = "UPDATE cadastro_paciente SET id_paciente = '$id_paciente',
                            nome='$nome', 
                            dt_nasc='$dt_nasc', 
                            cpf='$cpf',
                            endereco= '$endereco',
                            telefone='$telefone',
                            gmail= '$gmail',
                            estado_civil= '$estado_civil', 
                            ocupacao= '$ocupacao' where id_paciente=$id_paciente";

$executar = mysqli_query($conexao, $sql);

if($executar){
    echo "Atualizado com sucesso!";
}else{
    echo "Erro";
}

$fechar = mysqli_close($conexao);
?>