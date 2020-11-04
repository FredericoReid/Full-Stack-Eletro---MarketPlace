<?php
session_start();

//Dados um include da conexao para que o arquivo seja devidamente usado por aqui
include('conexao.php');


//Verificamos se o usuário digitou algo no cmapo email e senha. Caso negativo, retornamos ele para a página de login
if(empty($_POST['nome_cliente']) || empty($_POST['endereco']) || empty($_POST['telefone']) || empty($_POST['produto']) || empty($_POST['valor_unitario']) || empty($_POST['quantidade']) || empty($_POST['valor_total'])){
    header('Location: Pedidos.html');
    exit();
}

//pegamos os dados digitados pelo usuário
$nome_cliente = mysqli_real_escape_string($conexao, $_POST['nome_cliente']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$produto = mysqli_real_escape_string($conexao, $_POST['produto']);


$produto = $_POST['produto'];

if($produto == )

$valor_unitario = mysqli_real_escape_string($conexao, $_POST['produto']);



$quantidade = mysqli_real_escape_string($conexao, $_POST['quantidade']);
$valor_total = $valor_unitario * $quantidade;

//Verificamos em nosso banco de dados se as informações cooincidem
$query = "insert into pedidos
values ('nome_cliente', 'endereco', 'telefone', 'produto', valor_unitario, quantidade, valor_total);";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1){
    $_SESSION['email'] = $email;
    header('Location: painel.html');
    exit();
}
else{
    header('Location: pedidos.html');
    exit();
}


?>