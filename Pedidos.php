<!DOCTYPE html> 

<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peça!</title>
    
    <link rel="stylesheet" href="./CSS/pedidos.css">
    <script src="./JavaScript/valida_form.js"></script>
    
</head>
<body>
    <main>
        <div class="card">
            <form action="./PHP/conexao_pedidos.php" method="POST" id="formulario_pedido" onsubmit="return valida_form(this)">
                <h1>Pedidos</h1>

                <input type="nome_cliente" id="nome" name="nome_cliente" placeholder="Digite o seu Nome completo">
                <input type="endereco" id="endereco" name="endereco" placeholder="Digite seu endereço para entrega">
                <input type="telefone" id="telefone" name="telefone" placeholder="Digite seu telefone para contato">
                <br>
                
                <div class = "opcoes_produtos">
                <label for="">Selecione seu Produto:</label>
                <select name = "produto">
                    <option value="FOGAO 4 BOCAS">Fogão 4 bocas</option>
                    <option value="FOGAO ATLAS">Fogão ATLAS</option>
                    <option value="MICROONDAS ELETROLUX">Microondas Eletrolux</option>
                    <option value="MICROONDAS PHILCO">Microondas Philco</option>
                    <option value="MICOONDAS CONSUL">Microondas Consul</option>
                    <option value="GELADEIRA BRASTEMP">Geladeira Brastemp</option>
                    <option value="GELADEIRA TRÊS PORTAS">Geladeira três portas</option>
                    <option value="GELADEIRA DODGE">Geladeira Dodge</option>
                    <option value="MAQUINA DE LAVAR ELECTROLUX">Maquina de Lavar Eletrolux</option>
                    <option value="MAQUINA DE LAVAR PHILCO">Maquina de Lavar Philco</option>
                    <option value="LAVADORA DE PRATOS TORPENTE">Lavadora de Pratos Torpente</option>
                    <option value="LAVADORA DE PRATOS ELECTROLUX">Lavadora de Pratos Electrolux</option>
                </select>
                </div>

                <script>
                    $(document).ready(function() {
                        $('#estado').select2();
                    });
                </script>
                <br>

                
                <div class = "quantidade_produtos"> 
                <label for="">Selecione a quantidade:</label>
                <select name="quantidade">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                </div>
                
                <button type="submit"><b>Enviar Pedido</b></button>   
                <br>
                <br>
                
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
                <h4>Pedidos Pendentes</h4>
                <table border="1">
                    <tr>
                        <th>Nome Cliente</th>
                        <!--
                        <th>Endereço</th>
                        <th>Telefone</th> -->
                        <th>Produto</th><!--
                        <th>Valor unitário</th>-->
                        <th>Quantidade</th> <!--
                        <th>Valor Total</th> -->
                    </tr>
                    <?php while($dado = $consulta2->fetch_array()){ ?>
                    <tr>
                        <td><?php echo $dado["nome_cliente"]; ?></td> <!--
                        <td><?php echo $dado["endereco"]; ?></td> 
                        <td><?php echo $dado["telefone"]; ?></td> -->
                        <td><?php echo $dado["nome_produto"]; ?></td><!--
                        <td><?php echo $dado["valor_unitario"]; ?></td> -->
                        <td><?php echo $dado["quantidade"]; ?></td> <!--
                        <td><?php echo $dado["valor_total"]; ?></td> -->
                    </tr>
                    <?php } ?>
                </table>              
            </form>
        </div>
    </main>

</body>
</html>



