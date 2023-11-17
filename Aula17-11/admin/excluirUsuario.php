<?php
if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM usuarios where id = $id";
    $conectar = new mysqli("localhost", 
    "root", "","padoka");  
    $resultado = $conectar->query($sql);
}else{
    header("location: index.php?pagina=
    listarUsuario.php&isAutenticate=1");
}