<?php
$conexao = mysqli_connect('localhost','root','','teste');
$sql = "SELECT * FROM cadastro_paciente";
$executar = mysqli_query($conexao, $sql);

echo "<table border='1'>
    <tr><th>id_pacientes</th>
    <th>Nome</th>
    <th>Data de nascimento</th>
    <th>CPF</th>
    <th>Endereço</th>
    <th>Telefone</th>
    <th>Gmail</th>
    <th>Estado civil</th>
    <th>Ocupação</th>
    <th>Excluir</th>
    <th>Atualizar</th></tr>";

while($resultado = mysqli_fetch_array($executar)){
    $id_paciente = $resultado['id_paciente'];
    $nome = $resultado['nome'];
    $dt_nasc = $resultado['dt_nasc'];
    $cpf = $resultado['cpf'];
    $endereco = $resultado['endereco'];
    $telefone = $resultado['telefone'];
    $gmail = $resultado['gmail'];
    $estado_civil = $resultado['estado_civil'];
    $ocupacao = $resultado['ocupacao'];

    echo "<tr><td>$id_paciente</td>     <td>$nome</td>    <td>$dt_nasc</td>     <td>$cpf</td>    <td>$endereco</td>
    <td>$telefone</td>    <td>$gmail</td>   <td>$estado_civil</td>  <td>$ocupacao</td>    
    <td><a href='del_pac.php?id_paciente=$id_paciente'>Excluir</a></td>
    <td><a href='upd_cli.php?id_paciente=$id_paciente'>Atualizar</a></td></tr>";
    }


echo "</table>";
$fechar = mysqli_close($conexao);
?>