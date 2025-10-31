<?php

session_start();


if(!isset($_SESSION['usuario'])){
    $_SESSION['usuario'] = $_REQUEST['user'];
    $_SESSION['senha']  = $_REQUEST['pass']; 

    echo "Sessão iniciada e usuario registrado";
}else{
    echo 'Sessao nao iniciada';   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="acesso.php">
    <input type="submit" value="Mostrar infos">
    </form>
</body>
</html>
