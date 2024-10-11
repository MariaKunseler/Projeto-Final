<?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$conexao = mysqli_connect('localhost','root','','teste');

$sql = "SELECT * FROM usuarios WHERE usuario like '$usuario'
and senha like '$senha'";

$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);

if($res['usuario'] != NULL){
   $_SESSION['usuario'] = $res['usuario']; 
   header("location:listar.php");  
}
else{
   echo "Login e/ou senha incorretos";
}

echo "Logado com sucasso!";

$fechar = mysqli_close($conexao);
?>