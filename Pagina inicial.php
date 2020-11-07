<!DOCTYPE html>

<html lang="pt-BR">
<meta charset="utf-8">

<head>
    <center>
      <title>Full Stack Eletro</title>
      <table style="width:100%">
        <tr>
          <th><img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.03 (1).jpeg" width="299" height="60"></th>
          <th> <img src="./imagens/superpromocao.gif" width="960" height="60"> </th>
        </tr>
      </table>

      <script src="./JavaScript/script.js" type="text/javascript"></script>

      <link rel="stylesheet" href="./CSS/style.css">


<!-- ----------------------Menu-------------------------------------------- -->
      <nav class="menu1">
        <ul>
          <li><a href="Minha conta.html">Entrar / Cadastrar-se</a>
            <ul>
              <li><a href="#">Como se Cadastrar?</a></li>
              <li><a href="#">Já tenho conta</a>
                <ul>
                  <li><a href="Minha conta.html">Entrar</a></li>
                  <li><a href="#">Segurança de Dados</a></li>
                  <li><a href="#">Porque tantos dados?</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Produtos</a>
            <ul>
              <li><a href="#">Celulares</a></li>
              <li><a href="Pagina inicial.html">Eletrodomesticos</a>
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
          <li><a href="Sobre.html">Sobre</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Unidades</a>
            <ul>
              <li><a href="#">Tatuapé</a></li>
              <li><a href="#">Barra - funda</a></li>
              <li><a href="#">Jardins</a></li>
              <li><a href="#">Vila Guilherme</a></li>
            </ul>
          </li>
          <li><a href="#">Pedidos</a>
              <ul>
                <li><a href="Pedidos.php">Peça! </li>
                <li><a href="Pedidos_feitos">Pedidos feitos</li>
              </ul>
          
          </li>
          <li><form><input type="text" class="input-class" placeholder="Procure aqui" id="Procurainicial"></form></li>
          <li><button onclick="Procura()">Procurar</button></li>
      
        </ul>
      </nav>
      <hr>
    </center>

</head>

<body>
    
  <br>
  <br>
  <br>
  <br>


<!------------------------------------------- Começo dos produtos --------------------------------------------------------------->
  
  <div class="cat_produtos">
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



<!-- ----------------------------Término das Tabelas de Produtos e Inicio do Rodapé-------------------------------------- -->
<br>
<br>
<br>
<hr>


<table style="width:100%">
  <tr>
    <th>Formas de Pagamento: </th>
  </tr>
  <tr>
    <th><img src="./imagens/WhatsApp Image 2020-09-24 at 18.08.05 (2).jpeg" alt="Formas de Pagamento" style="width:1100px;height:150px"></th>
  </tr>
</table>

</body>

</html>