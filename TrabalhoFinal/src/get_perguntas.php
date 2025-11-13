<?php
require_once 'db.php';
require_once 'funcoes.php';

$perguntas = getPerguntas(); 

header('Content-Type: application/json; charset=utf-8');
echo json_encode($perguntas, JSON_UNESCAPED_UNICODE);
?>
