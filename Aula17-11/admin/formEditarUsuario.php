<?php
    if(isset($_GET["mensagem"]) && !empty($_GET["mensagem"])){
        $mensagem = $_GET["mensagem"];
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

<?php
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id = $_GET["id"];
        $sql = "SELECT * FROM usuarios where id = $id";
        $conectar = new mysqli("localhost", "root", "","padoka");  
        $resultado = $conectar->query($sql);

        while($linha = $resultado->fetch_array())
            $lista = $linha;
        
            echo $lista["nome"];
?>


<form action = "cadastrarUsuario.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNome">Nome</label>
      <input type="text" class="form-control" name = "nome"
      id="inputNome" placeholder="Nome do usuário" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">E-mail</label>
      <input type="email" class="form-control"  name = "email"
      id="inputEmail" placeholder="Email" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputLogin">Login</label>
      <input type="text" class="form-control"  name = "login"
      id="inputLogin" placeholder="Login do Usuário">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control"  name = "senha" id="inputPassword4" placeholder="Senha">
    </div>
    <div class="form-group col-md-6">
        <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
        <input type="file"  name = "fotoPerfil" class="form-control-file" id="exampleFormControlFile1">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputAddress">Endereço</label>
        <input type="text" class="form-control"  name = "endereco" id="inputAddress" placeholder="Nome da rua/avenida">
    </div>
    <div class="form-group col-md-2">
        <label for="inputAddress2">Número</label>
        <input type="text" class="form-control"  name = "numero" id="inputAddress2" placeholder="Número.">
    </div>
    <div class="form-group col-md-4">
        <label for="inputAddress2">Complemento</label>
        <input type="text" class="form-control" name = "complemento" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
    </div>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" name = "cidade" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado"  name = "estado" class="form-control" required>
        <option selected>Encontre o seu estado abaixo!</option>
        <option value="Paraná">Paraná</option>
        <option value="São Paulo">São Paulo</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" name = "cep" id="inputCEP">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" name="ativado" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Ativar usuário de forma imediata?
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
<?php
}else{
    header("location: index.php?pagina=listarUsuario.php&isAutenticate=1");
}
?>