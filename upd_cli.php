<?php
$id_paciente = $_GET['id_paciente'];
$conexao = mysqli_connect('localhost','root','','teste');
$sql = "SELECT * FROM cadastro_paciente WHERE id_paciente=$id_paciente";
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
   
    <form action="atualizar_pac.php" method="post">

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
        <label>Data de Nascimento</label>
        <input type="text" name="dt_nasc"
        value="<?php echo $res['dt_nasc'];?>"><br>
    </div>

    <div class="inputbox">
        <label>CPF</label>
        <input type="text" name="cpf"
        value="<?php echo $res['cpf'];?>"><br>
    </div> 
    
    <div class="inputbox">
        <label>Endereço</label>
        <input type = "text" name = "endereco"
        value="<?php echo $res['endereco'];?>"><br>
    </div>

    <div class="inputbox">
        <label>Telefone</label>
        <input type = "text" name = "telefone"
        value="<?php echo $res['telefone'];?>"><br>
    </div>

    <div class="inputbox">
        <label>Gmail</label>
        <input type = "text" name = "gmail"
        value="<?php echo $res['gmail'];?>"><br>
    </div>

    <div class="inputbox">
        <label>Estado civil</label>
        <input type = "text" name = "estado_civil"
        value="<?php echo $res['estado_civil'];?>"><br>
    </div>

    <div class="inputbox">
        <label>Ocupação</label>
        <input type = "text" name = "ocupacao"
        value="<?php echo $res['ocupacao'];?>"><br>
    </div>

    <br><button type="submit">Atualizar paciente</button>
    </form>
    
</section>
</body>
</html>