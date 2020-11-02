function Procura() {

    var produtos = ["geladeira", "microondas", "fogao", "lavadora", "maquina de lavar"];

    var procurar1 = document.getElementById("Procurainicial");

    for (let i = 0; i < produtos.length; i++) {
      if (produtos[i] == procurar1) {
        var auxiliar = 1;
      }
    }

    if (auxiliar > 0) {
      alert('Achamos seu produto! Dê uma olhada abaixo nessa mesma página');
    }
    
    else {
      alert('Não achamos seu produto!  :( ');
    }

    return 0;
}

function exibirCateg(categoria) {
  let elementos = document.getElementsByClassName("produtos");
  console.log(elementos[0].id);
  console.log(categoria);
  for (var i = 0; i < elementos.length; i++) {
      console.log(elementos[i].id);
      if (categoria == elementos[i].id) {
          elementos[i].style = "display:inline-block";
      }
      else {
          elementos[i].style = "display:none";
      }
  }
}

function destaque = (imagem) => {
  imagem.width == 240 ? imagem.width = 140 : imagem.width = 240
}

