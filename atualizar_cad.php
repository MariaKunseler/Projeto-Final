<?php
$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$mot_consul = $_POST['mot_consul'];
$anotacoes = $_POST['anotacoes_do_atendimento'];
$prescricao = $_POST['prescricao'];

$conexao = mysqli_connect('localhost','root','','teste');
$sql = "update pacientes set id_paciente = '$id_paciente',
                            nome='$nome', 
                            idade='$idade', 
                            motivo_da_consulta='$mot_consul',
                            anotacoes_do_atendimento='$anotacoes',
                            prescricao='$prescricao' where id_paciente=$id_paciente";

$executar = mysqli_query($conexao, $sql);

if($executar){
    echo "Atualizado com sucesso!";
}else{
    echo "Erro";
}

$fechar = mysqli_close($conexao);
?>