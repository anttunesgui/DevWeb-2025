<?php

session_start();

print_r($_REQUEST);

if(!isset($_SESSION['usuario'])){
    $_SESSION['usuario'] = $_REQUEST['user'];
    $_SESSION['senha']  = $_REQUEST['pass']; 

    echo "Sessão iniciada e usuario registrado";
}else{
    echo 'FFF';   
    

    session_destroy();


}

?>