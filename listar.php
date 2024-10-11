<?php
$conexao = mysqli_connect('localhost','root','','teste');
$sql = "SELECT * FROM pacientes";
$executar = mysqli_query($conexao, $sql);

echo "<table border='1'>
    <tr><th>id_pacientes</th>
    <th>Nome</th>
    <th>Idade</th>
    <th>Motivo consulta</th>
    <th>Anotações</th>
    <th>Prescrição</th>
    <th>Apagar</th>
    <th>Atualizar</th></tr>";

while($resultado = mysqli_fetch_array($executar)){
    $id_paciente = $resultado['id_paciente'];
    $nome = $resultado['nome'];
    $idade = $resultado['idade'];
    $mot_consul = $resultado['motivo_da_consulta'];
    $anotacoes = $resultado['anotacoes_do_atendimento'];
    $prescricao = $resultado['prescricao'];

    echo "<tr><td>$id_paciente</td>     <td>$nome</td>    <td>$idade</td>     <td>$mot_consul</td>    <td>$anotacoes</td>
    <td>$prescricao</td>    
    <td><a href='del_paciente.php?id_paciente=$id_paciente'>Excluir</a></td>
    <td><a href='upd_paciente.php?id_paciente=$id_paciente'>Atualizar</a></td></tr>";
    }


echo "</table>";
$fechar = mysqli_close($conexao);
?>