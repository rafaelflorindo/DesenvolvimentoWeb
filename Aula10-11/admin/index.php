<?php
//index.php?isAutenticate=true
    if(isset($_GET["isAutenticate"])){
        $isAutenticate = $_GET["isAutenticate"];
    }else{
        $isAutenticate = false;
    }

    if(!$isAutenticate){
        //echo "Usuário não autenticado!!!";
        include("formLogin.php");
    }else{
        echo "Usuário Autenticado";
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Padoka</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Destaques</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Preços</a>
      </li>-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuários
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="index.php?pagina=formCadastroUsuario.php&isAutenticate=1">Cadastrar</a>
          <a class="dropdown-item" href="#">Manutenção</a>
          <a class="dropdown-item" href="#">Relatórios</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Produtos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cadastrar</a>
          <a class="dropdown-item" href="#">Manutenção</a>
          <a class="dropdown-item" href="#">Relatórios</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
        <?php
    if(isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
        $mensagem = $_GET["mensagem"];
        print_r($mensagem);
        ?>
        <div class="alert alert-success" role="alert">
            <?=$mensagem;?>
        </div>
    <?php
    }else{
        //$mensagem = "Erro. Você não está autenticado na plataforma!!!";
        ?>
        <div class="alert alert-danger" role="alert">
        <?=$mensagem;?>
        </div>
    <?php } ?>

            <h1>Cadastro de Usuários</h1>
            <?php
                if(isset($_GET["pagina"]) &&
                !empty($_GET["pagina"])){
                    $pagina = $_GET["pagina"];
                    include("$pagina");
                }else{
                    echo "Home";
                }
            ?>
        </div>
        <div class="col-1"></div>
    </div>
</div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
?>


<!--<div class="container">
  <div class="row">
    <div class="col-sm">
      Uma de três colunas
    </div>
    <div class="col-sm">
      Uma de três colunas
    </div>
    <div class="col-sm">
      Uma de três colunas
    </div>
  </div>
</div>
https://getbootstrap.com.br/docs/4.1/layout/grid/

-->