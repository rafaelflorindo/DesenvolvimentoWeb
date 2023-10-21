<?php
//Receber valores de formulário

$nomeProduto = $_GET["nomeProduto"];
$valor = $_GET["valor"];
$quantidade = $_GET["quantidade"];

$total = $quantidade * $valor;

?>
<table border="1">
    <th>Produto</th>
    <th>Quantidade</th>
    <th>Valor Unitário</th>
    <th>Total</th>
    <tr>
        <td><?=$nomeProduto;?></td>
        <td><?=$quantidade;?></td>
        <td><?=$valor;?></td>
        <td><?=$total;?></td>
    </tr>
</table>