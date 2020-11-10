<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Peça agora!</title>
    <link rel="icon" href="./imagens/logo.png" />

    <!-- Fonte --> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="./js/script.js" ></script>

    <!-- Fonte Awesome -->
    <script src="https://kit.fontawesome.com/dd212ccd9e.js" crossorigin="anonymous"></script>

    <!-- Progress Bar -->
    <script src="./js/progressbar.min.js"></script>

    <!-- Paralax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>



</head>

<body>
    <!--
    <nav class="navbar navbar-expand-lg navbar-light shadow" id="menu">
        <div class="container">
            <a class="navbar-brand" href="./index.php">
                <img src="./imagens/logo.png" width="50%" title="">
            </a>
            <h7><a href="#">Minha conta </a></h7>

        </div>
    </nav> -->



    <div class="container" id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top">
                <a href = "#" class="navbar-brand">
                    <img src="./imagens/logo.png" alt="logo" alt="Logo Full Stack Eletro"> 
                </a>
                <button class="navbaar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
                    aria-controls="navbar-links" arua-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu" href="./index.php"> Home </a>
                        <a class="nav-item nav-link" id="conta-menu" href="#"> Entre/Cadastre-se </a>                    
                    </div>
                </div>

            </nav>


        </div>









    
    <main class="row container align-items-center justify-content-center m-auto" style="height: 89vh;">
        <div class="card border-0 col-lg-5 col-md-8 col-12 py-5" align="center">
            <h2 class="text-center text-dark">Pedidos</h2>

                <form class="col-lg-12" action="./processamento banco de dados/processamento_pedidos.php" method="post">

                    <!-- Começo do dos inputs do fomrulário -->

                    <div class="col-12">
                        <input class="form-control" type="nome_cliente" id="nome" name="nome_cliente" placeholder="Nome completo" required>
                    </div>

                    <br>

                    <div class="col-12">
                        <input class="form-control" type="endereco" id="endereco" name="endereco" placeholder="Endereço para entrega" required>
                    </div>

                    <br>

                    <div class="col-12">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Email para contato" required>
                    </div>

                    <br>

                    <div class="col-12">
                        <input class="form-control" type="telefone" id="telefone" name="telefone" placeholder="Telefone para contato" required>
                    </div>
                    
                    <br>
                    
                    <div class = "opcoes_produtos">
                    <label for="">Selecione seu Produto:</label>
                    <select class="form-control" name = "produto">
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
                    <select class="form-control" name="quantidade">
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
                    
                    <br>

                    <button type="submit" class="btn btn-success"><b>Enviar Pedido</b></button>   
                    <br>
                    <br>

                </form>
            
        </div>
    </main>

                                    
                                    
                                    <!-- Abaixo comaçamos a exibir os produtos do banco de dados -->
    
    
    
    <?php
    
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

    <div class="container" align="center">
        <div class="col-6 sm-6" align="center">
            <h4>Pedidos Pendentes</h4>
            <table class="table table-striped table-hover"  border="1">
                <tr>
                    <th>Nome Cliente</th>
                    <!--
                    <th>Endereço</th>
                    <th>Telefone</th> -->
                    <th>Produto</th>
                    <th>Valor unitário</th>
                    <th>Quantidade</th> 
                    <th>Valor Total</th>
                </tr>
                <?php while($dado = $consulta2->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dado["nome_cliente"]; ?></td> <!--
                    <td><?php echo $dado["endereco"]; ?></td> 
                    <td><?php echo $dado["telefone"]; ?></td> -->
                    <td><?php echo $dado["nome_produto"]; ?></td>
                    <td><?php echo $dado["valor_unitario"]; ?></td> 
                    <td><?php echo $dado["quantidade"]; ?></td> 
                    <td><?php echo $dado["valor_total"]; ?></td> 
                </tr>
                <?php } ?>
            </table>     
        </div>        
    </div>


    <script src="./js/validacao_form.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
</body>

</html>