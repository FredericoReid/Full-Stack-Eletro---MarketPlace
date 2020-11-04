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

if($produto == "FOGAO1"){
    $valor_unitario = 1129;
}

elseif ($produto == "FOGAO2"){
    $valor_unitario = 1129;
}

elseif ($produto == "MICROONDAS1"){
    $valor_unitario = 409.88;
}

elseif ($produto == "MICROONDAS2"){
    $valor_unitario = 464.00;
}

elseif ($produto == "MICROONDAS3"){
    $valor_unitario = 436.05;
}

elseif ($produto == "GELADEIRA1"){
    $valor_unitario = 5019;
}

elseif ($produto == "GELADEIRA2"){
    $valor_unitario = 1910.90;
}

elseif ($produto == "GELADEIRA3"){
    $valor_unitario = 2069;
}

elseif ($produto == "LAVAROUPAS1"){
    $valor_unitario = 1214.10;
}

elseif ($produto == "LAVAROUPAS2"){
    $valor_unitario = 2179.90;
}

elseif ($produto == "LAVALOUCAS1"){
    $valor_unitario = 2799;
}

elseif ($produto == "LAVALOUCAS2"){
    $valor_unitario = 1730.61;
}


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