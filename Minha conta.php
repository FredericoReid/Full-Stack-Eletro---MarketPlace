<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de Login</title>

        <style>
            .caixa-login {
                width: 100vw;
                height: 100vh;
                background: #6C7A89;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center
            }

            .caixa {
                width: 500px;
                height: 500px;
                background: #fff;
            }

            .body {
                margin: 0px;
            }

            .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            }

        </style>

    </head>

    <body>
    

    <div class="caixa-login">
        <div class="caixa">
            <img src="imagens/WhatsApp Image 2020-09-24 at 18.08.03 (1).jpeg" width="300" height="60" class = "center">
            <br>
            <br>
            <br>
            <h1 class="ls-login-logo">Entre / Cadastre-se</h1>
            <form role="form">
                <fieldset>
    
                    <div class="form-group ls-login-user">
                        <label for="usuarioLogin">Usuário</label>
                        <input class="form-control ls-login-bg-user input-lg" id="usuarioLogin" type="text" aria-label="Usuário" placeholder="Usuário">
                    </div>
    
                    <div class="form-group ls-login-password">
                        <label for="usuarioPassword">Senha </label>
                        <input class="form-control ls-login-bg-password input-lg" id="usuarioPassword" type="password" aria-label="Senha" placeholder="Senha">
                    </div>
    
                    <a href="#" class="ls-login-forgot">Esqueci minha senha</a>
    
                    <button onclick="Alerta()">Entrar</button>

                    <script>
                        function Alerta(){
                            
                            var caixa1 = document.getElementById("usuarioLogin");
                            var caixa2 = document.getElementById("usuarioPassword");

                            if(caixa1 != "" && caixa2 != ""){
                                alert('Você foi registrado com sucesso!');
                            }
                            else{
                                alert('Por favor, preencha todos os campos');
                            }
                            return 0;
                        }
                    </script>

                    <p class="txt-center ls-login-signup">Não possui um usuário?
                        <a href="#">Cadastre-se agora</a>
                    </p>
    
                </fieldset>
            </form>
        </div>
    </div>
    </body>
</html>