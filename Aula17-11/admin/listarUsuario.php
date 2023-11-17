<?php
//listar Usuário

$local = "localhost";
$usuario = "root";
$senha = "";
$banco = "padoka";

$conexao = new Mysqli($local, $usuario, $senha, $banco);

$sql = "select * from usuarios";

$resultado = $conexao->query($sql);

$lista = array();//criando um array vazio
//percorrendo o objeto $resultado e, enquanto
//tiver registro no objeto, pega o registro
//e, armazena em $linha e depois em lista.
while($linha = $resultado->fetch_array()){
    $lista[] = $linha;
}
/*echo "<pre>";
print_r($lista);
echo "</pre>";*/

?>

<table border=1>
    <th>Item</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Ações</th>
    <?php
        $i = 1;
        foreach($lista as $value){
            $id = $value["id"];
    ?>
    <tr>
        <td><?=$i++;?></td>
        <td><?=$value["nome"];?></td>
        <td><?=$value["email"];?></td>
        <td>
<a href="index.php?pagina=formEditarUsuario.php
&isAutenticate=1&id=<?=$id;?>">[EDITAR]</a>
<a href="index.php?pagina=excluirUsuario.php
&isAutenticate=1&id=<?=$id;?>">[EXCLUIR]</a>
        </td>
    </tr>
    <?php
        }
        ?>
</table>









