<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Stack Eletro</title>

    <!-- Fonte --> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="./js/script.js" type="text/javascript"></script>

    <!-- Fonte Awesome -->
    <script src="https://kit.fontawesome.com/dd212ccd9e.js" crossorigin="anonymous"></script>

    <!-- Progress Bar -->
    <script src="./js/progressbar.min.js"></script>

    <!-- Paralax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    
</head>
<body>
    
    <!-- Cabeçalho -->
    <header>
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
                        <ul>
                            <li><a class="nav-item nav-link" id="produtos-menu"> Produtos </a>
                                <ul>
                                    <li><a href="#">Celulares</a></li>
                                    <li><a href="index.php">Eletrodomesticos</a>
                                        <ul>
                                        <li onclick="exibirCateg('fogao')">Fogões</li>
                                        <li onclick="exibirCateg('microondas')">Microondas</li>
                                        <li onclick="exibirCateg('geladeira')">Geladeiras</li>
                                        <li onclick="exibirCateg('lavaroupas')">Máquinas de Lavar</li>
                                        <li onclick="exibirCateg('lavaloucas')">Lava - louças</li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Vestíveis</a></li>
                                    <li><a href="#">Brinquedos</a></li>
                                    <li><a href="#">Informática</a></li>
                                    <li><a href="#">Cozinha</a></li>
                                </ul>
                            </li>
                        </ul>                        
                        
                        <a class="nav-item nav-link" id="sobre-menu"> Sobre </a>
                        <a class="nav-item nav-link" id="unidades-menu"> Unidades </a>
                        <a class="nav-item nav-link" id="pedidos-menu" href="./pedidos.php"> Peça! </a>
                        
                    </div>
                </div>

            </nav>


        </div>
    </header>

    <main>
        <div class="container-fluid col-12 sm-3">
            <div class="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="mainSlider" data-slide-to="1" ></li>
                    <li data-target="mainSlider" data-slide-to="2" ></li>
                </ol>

                <!-- Carrossel de imagens -->
                <div class="carousel-inner">

                    <!-- Primeira imagem do carousel -->
                    <div class="carousel-item active">
                        <img src="imagens/carousel1.jpg" class="d-block w-10" alt="">
                    </div>

                    <!-- Segunda imagem -->
                    <div class="carousel-item">
                        <img src="imagens/carousel2.jpg" class="d-block w-10" alt="">
                    </div>

                    <!-- Terceira imagem -->
                    <div class="carousel-item">
                        <img src="imagens/carousel3.jpg" class="d-block w-10" alt="">
                    </div>
                </div>

            </div>
        </div>
    </main>

<br>

    <!-- ------------------------------Produtos----------------------------------------------- -->
    <div class="row col-xs-6 col-sm-6 col-md-6 col-lg-12" align="center">
            
        <div class="col-lg-3">
            <div class="produtos" id="geladeira">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.03 (2).jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Geladeira Brastemp</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 6.389,00</p>
                    <p class="preco_final">R$ 5.019,00</p>
                </div>
            </div>
        </div>



        <div class="col-lg-3">
            <div class="produtos" id="geladeira">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.03.jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Geladeira tres portas</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 2.068,60</p>
                    <p class="preco_final">R$ 1.910,90</p><br>
                </div>
            </div>            
        </div>
        

        <div class="col-lg-3">
            <div class="produtos" id="geladeira">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.04 (1).jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Geladeira Dodge</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 2.199,99</p>
                    <p class="preco_final">R$ 2.069,00</p><br>
                </div>
            </div>
        </div>



        <div class="col-lg-3">
            <div class="produtos" id="fogao">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.02 (1).jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Fogão 4 Bocas</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 1.299,99</p>
                    <p class="preco_final">R$ 1.129,00</p><br>
                </div>
            </div>      
        </div>



        <div class="col-lg-3">
            <div class="produtos" id="fogao">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.02.jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Fogão ATLAS</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 699,99</p>
                    <p class="preco_final">R$ 519,70</p><br>
                </div>
            </div>
        </div>
        


        <div class="col-lg-3">
            <div class="produtos" id="microondas">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.02 (2).jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Microondas Eletrolux</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 589,99</p>
                    <p class="preco_final">R$ 409,88</p><br>
                </div>
            </div>
        </div>
        
        
        
        <div class="col-lg-3">
            <div class="produtos" id="microondas">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.04 (3).jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Micro-ondas Philco</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 508,70</p>
                    <p class="preco_final">R$ 464,00</p><br>
                </div>
            </div>            
        </div>

        <div class="col-lg-3">
            <div class="produtos" id="microondas">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.06.jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Microondas Consul</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 459,99</p>
                    <p class="preco_final">R$ 436,05</p><br>
                </div>
            </div>
        </div>
    
        <div class="col-lg-3">
            <div class="produtos" id="lavaloucas">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.04.jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Lava-louça Torpente</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 3599,00</p>
                    <p class="preco_final">R$ 2.799,00</p><br>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="produtos" id="lavaloucas">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.05 (1).jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Lava-Louça Electrolux</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 1.970,59</p>
                    <p class="preco_final">R$ 1.730,61</p><br>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="produtos" id="lavaroupas">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.04 (2).jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Máquina de Lavar Electrolux</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 1.699,00</p>
                    <p class="preco_final">R$ 1.214,10</p><br>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="produtos" id="lavaroupas">
                <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.05.jpeg" width="140px" onmouseover="destaque(this)"
                    onmouseout="destaque(this)">
                <br>
                <p>Máquina de Lavar Philco</p>
                <div>
                    <hr>
                    <p class="preco_ant">R$ 2.399,00</p>
                    <p class="preco_final">R$ 2.179,90</p><br>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-lg-12" align="center">
        <h5>Formas de pagamento</h5>
        </div>

        <div class="col-lg-12" align="center">
            <img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.05 (2).jpeg" alt="Formas de Pagamento" style="width:1100px;height:150px">
        </div>

    </div>

</body>
</html> 