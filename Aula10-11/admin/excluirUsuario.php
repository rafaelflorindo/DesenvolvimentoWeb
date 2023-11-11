<?php

$id = $_GET["id"];
//echo "ID = " . $id;
$sql = "DELETE FROM usuarios where id = $id";
echo $sql;

$conectar = new mysqli("localhost", 
"root", "","padoka");

$resultado = $conectar->query($sql);