<style>
.hello{
    color: blue;
}
</style>

<?php
    echo "<p class=hello>Hello World</p>";
//    echo " <br>Sexta-Feira";

//VARIÁVEL
$site = "https://senac.blackboard.com/";
$ano = 2023;
$valorCurso = 500.52;
echo "Site: $site";
echo "<br>Ano: " . $ano;//concatenação
?>
<br>
<?php
echo "Valor do curso R$ " . $valorCurso;
?>
<p>Hello World</p>
<p>Sexta Feira</p>

<?php
    $valor = 54.56;
    $quantidade = 45;
    $total = $valor * $quantidade;
?>
<p>
    <b>Valor</b> = <?=$valor;?>
    <br><b>Quantidade</b> = <?=$quantidade;?>
    <br><b>Total</b> = R$ <?=$total;?>
</p>

<form action="calcularTotal.php">
<p>Nome do produto 
    <input type = "text" name = "nomeProduto">
</p>
<p>Valor
    <input type = "text" name = "valor">
</p>
<p>Quantidade 
    <input type = "text" name = "quantidade">
</p>
<input type = "submit" value = "CALCULAR">
</form>






