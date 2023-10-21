<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--
        https://getbootstrap.com.br/
    -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<?php
    if(isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
        $mensagem = $_GET["mensagem"];
        ?>
        <div class="alert alert-danger" role="alert">
            <?=$mensagem;?>
        </div>
    <?php
    }else{
        $mensagem = "Erro. Você não está autenticado na plataforma!!!";
        ?>
        <div class="alert alert-danger" role="alert">
        <?=$mensagem;?>
        </div>
    <?php } ?>

    <h1>Autenticação de Usuários</h1>
    <p>Para acessar o sistema de controle de estoque é necessário realizar a autenticação de usuário.</p>
    
    <!--<form action="autenticar.php" method="POST">
        <input type = "text" name="login" 
        placeholder="Informar o seu login">
        <br>
        <input type = "password" name="password"
        placeholder="Informe a sua senha">
        <br>
        <input type="submit" value="Autenticar">
    </form>-->

  <form action="autenticar.php" method="POST">
    <div class="form-group">
        <label for="login">Login</label>
        <input class="form-control" type="text" name = "login" id="login" placeholder="Informe o seu login">
        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Continuar conectado</label>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
   

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 
</body>
</html>

