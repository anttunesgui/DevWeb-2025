<?php

require_once 'login.php';

echo 'Login: ' .$_SESSION['usuario'].'<br>';
echo 'Senha: '.$_SESSION['senha'].'<br>';

$agora = date("d/m/Y H:i:s");
 
echo 'AGORA: '.$agora;
echo 'Ultima requisicao: '.strtotime($_SESSION["ultima_requisicao"]);
echo 'Tempo total: '.$_SESSION["tempo_total"] += ($atual - $ultima);


session_destroy();
