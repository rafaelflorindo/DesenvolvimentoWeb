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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página Principal - Protegida</h1>
</body>
</html>
<?php
    }
?>