<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./_img/icon-logo.png">
    <link rel="stylesheet" href="./_css/fonts.css?v=1.3">
    <link rel="stylesheet" href="./_css/login.css?v=1.4">
    <link rel="stylesheet" href="./_css/reset.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Login</title>
</head>
<body>
    <section>
        <div class="btn-back">
            <a href="javascript:history.back()">
                <img src="./_img/back-login.svg">
            </a>
        </div>
        <div class="center-section">
            <div class="title">
                <h3>Login</h3>
            </div> 
            <div class="formulario">
                <form action="./_scripts/login.php" method="POST">
                    <div class="input-div">
                        <div class="i">
                            <i data-feather="user"></i>
                        </div>
                        <div class="box-input">
                            <input type="text" name="user" class="input" placeholder="Usuário" title="Preencha este campo">
                        </div>
                    </div>
                    <div class="input-div">
                        <div class="i">
                            <i data-feather="lock"></i>
                        </div>
                        <div class="box-input">
                            <input type="password" name="senha" class="input" placeholder="Senha" title="Preencha este campo">
                        </div>
                    </div>
                    <div class="status">
                        <?php
                            if(isset($_SESSION['nao_autenticado'])):
                        ?>
                            <div class="login-erro">
                                <p>Usuário ou senha inválido</p>
                            </div>
                        <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>
                    </div>
                    <div class="btn-submit">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
                <div class="txt-pergunta">
                    <p>Primeira vez aqui? <a href="./cadastro.php">Cadastro</a></p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="copyright">
            <p>Web SSH © 2020 - Todos os direitos autorais reservados</p>
            <p>Criado com muito <span><img src="./_img/heart.svg"></span> por Danilo</p>
        </div>
    </footer>
    <script>
        feather.replace()
      </script>
    <script src="./_scripts/login.js?v=1.1"></script>
</body>
</html>