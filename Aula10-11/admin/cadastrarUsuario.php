<?php

/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/
/*Array
(
    [nome] => Davi Florindo
    [email] => davi@hotmail.com
    [login] => davi
    [senha] => qwe123
    [fotoPerfil] => 
    [endereco] => Rua 1
    [numero] => 5500
    [complemento] => Casa
    [cidade] => Maringá
    [estado] => Paraná
    [cep] => 87047-550
    [ativado] => on
)*/
if(isset($_POST["nome"]) && !empty($_POST["nome"]) &&
isset($_POST["email"]) && !empty($_POST["email"]) &&
isset($_POST["login"]) && !empty($_POST["login"]) &&
isset($_POST["senha"]) && !empty($_POST["senha"]) &&
isset($_POST["endereco"]) && !empty($_POST["endereco"]) &&
isset($_POST["numero"]) && !empty($_POST["numero"]) &&
isset($_POST["complemento"]) && !empty($_POST["complemento"]) &&
isset($_POST["cidade"]) && !empty($_POST["cidade"]) &&
isset($_POST["estado"]) && !empty($_POST["estado"]) &&
isset($_POST["cep"]) && !empty($_POST["cep"]) &&
isset($_POST["ativado"]) && !empty($_POST["ativado"])
){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $ativado = $_POST["ativado"];
    $dataCadastro = date("Y-m-d H:m:s");
    //criando um objeto de conexão com o banco de dados
    $conectar = new Mysqli("localhost", 
    "root", "","padoka");

    //montando a string de inserção
    //$sql = "INSERT INTO usuarios (<CAMPOS>) VALUES (<VALORES>)";
    $sql = "INSERT INTO usuarios (
        nome, email, login, senha, endereco,
    numero, complemento, cidade, estado, cep, 
    ativado, dataCadastro) VALUES (
        '".$nome."','".$email."','".$login."',
        '".$senha."','".$endereco."','".$numero."',
        '".$complemento."','".$cidade."','".$estado."',
        '".$cep."','".$ativado."','".$dataCadastro."'
    )";
    $resultado = $conectar->query("$sql");
    if($resultado){
        $mensagem = "Registro Gravado com Sucesso!";
        $status = "sucesso";
        header("location: index.php?isAutenticate=1&mensagem=".$mensagem."&status=".$status);
    }else{
        $mensagem = "Ocorreu um erro ao gravar o 
        registro, tente novamente mais tarde!";
header("location: index.php?pagina=formCadastroUsuario.php&isAutenticate=1&mensagem=".$mensagem);
    }
}else{
    $mensagem = "Preenchimento errado, tente novamente!!!";
header("location: index.php?pagina=formCadastroUsuario.php&isAutenticate=1&mensagem=".$mensagem);

}