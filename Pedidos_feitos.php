<?php
session_start();

//Aqui definimos os parametros para a conexao com o banco de dados
define('Hostname', 'localhost');
define('Username', 'root');
define('Password', '');
define('DB', 'fseletro');

//Fazemos uma conexao com o banco de dados passando os parametros definidos anteriormente
$conexao = mysqli_connect(Hostname, Username, Password, DB) ;

$consulta = "SELECT * FROM pedidos";
$consulta2 = $conexao->query($consulta) or die($conexao->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos feitos</title>
</head>
<body>
     <table border="1">
        <tr>
            <th>Nome Cliente</th>
            <!--
            <th>Endereço</th>
            <th>Telefone</th> -->
            <th>Produto</th><!--
            <th>Valor unitário</th>
            <th>Quantidade</th>
            <th>Valor Total</th>-->
        </tr>
        <?php while($dado = $consulta2->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome_cliente"]; ?></td> <!--
            <td><?php echo $dado["endereco"]; ?></td> 
            <td><?php echo $dado["telefone"]; ?></td> -->
            <td><?php echo $dado["nome_produto"]; ?></td><!--
            <td><?php echo $dado["valor_unitario"]; ?></td>
            <td><?php echo $dado["quantidade"]; ?></td>
            <td><?php echo $dado["valor_total"]; ?></td> -->
        </tr>
        <?php } ?>
     
     </table>



</body>
</html>