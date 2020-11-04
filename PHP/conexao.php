<?php

//Aqui definimos os parametros para a conexao com o banco de dados
define('Hostname', 'localhost:8080');
define('Username', 'root');
define('Password', 'Usuarioroot@!372');
define('DB', 'pedidos');

//Fazemos uma conexao com o banco de dados passando os parametros definidos anteriormente
$conexao = mysqli_connect(Hostname, Username, Password, DB);

//Verificamos se a conexão foi realizada com sucesso
if(!$conexao){
    echo "Não conectado";
}

else{
    echo "Conectado com sucesso";
}

?>