<?php
$id_paciente = $_GET['id_paciente'];
$conexao = mysqli_connect('localhost','root','','teste');
$sql = "SELECT * FROM pacientes WHERE id_paciente=$id_paciente";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
$fechar = mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cad_pac.css">
</head>
<body>
<h1>FLORIR AROMAS</h1>
    <section>
        <h2>Cadastro do paciente</h2>
   
    <form action="atualizar_cad.php" method="post">

    <div class="inputbox">
        <label>Id paciente</label>
        <input type="text" name="id_paciente"
        value="<?php echo $res['id_paciente'];?>" readonly><br>
    </div>

    <div class="inputbox">
        <label>Nome do paciente</label>
        <input type="text" name="nome"
        value="<?php echo $res['nome'];?>"><br>
    </div>

    <div class="inputbox">
        <label>Idade</label>
        <input type="text" name="idade"
        value="<?php echo $res['idade'];?>"><br>
    </div>

    <div class="inputbox">
        <label>Motivo da consulta</label>
        <input type="text" name="mot_consul"
        value="<?php echo $res['motivo_da_consulta'];?>"><br>
    </div> 
    
    <div class="inputbox">
        <label>Anotações do atendimento</label><input type = "text" name = "anotacoes_do_atendimento"
        value="<?php echo $res['anotacoes_do_atendimento'];?>"><br>
    </div>

    <div class="inputbox">
        <label>Prescrição</label>
        <input type = "text" name = "prescricao"
        value="<?php echo $res['prescricao'];?>"><br>
    </div>
    <br><button type="submit">Atualizar atendimento</button>
    </form>
    
</section>
</body>
</html>