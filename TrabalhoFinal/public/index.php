<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <script src="js/script.js"></script>
    <div class="perguntas">

    </div>
    <div class="avaliacoes">
        <span class="descricao desc2">Excelente</span>
        <div class="botoes">
            <br>
            <button class="avaliacao-botoes btn-0" onclick="index.php">0</button>
            <button class="avaliacao-botoes btn-1" onclick="index.php">1</button>
            <button class="avaliacao-botoes btn-2" onclick="index.php">2</button>
            <button class="avaliacao-botoes btn-3" onclick="index.php">3</button>
            <button class="avaliacao-botoes btn-4" onclick="index.php">4</button>
            <button class="avaliacao-botoes btn-5" onclick="index.php">5</button>
            <button class="avaliacao-botoes btn-6" onclick="index.php">6</button>
            <button class="avaliacao-botoes btn-7" onclick="index.php">7</button>
            <button class="avaliacao-botoes btn-8" onclick="index.php">8</button>
            <button class="avaliacao-botoes btn-9" onclick="index.php">9</button>
            <button class="avaliacao-botoes btn-10" onclick="index.php">10</button>
        </div>
        <span class="descricao desc1">Ruim</span>
    </div>
    <div class="rodape">
        <footer>
            <p>Sua avaliação espontânea é anônima, nenhuma informação pessoal é solicitada ou armazenada.</p>
        </footer>
    </div>
</body>
</html>

<?php
    require_once '../src/funcoes.php';
    require_once '../src/db.php';

    $funcoes = new Funcoes();
    $aPerguntas = $funcoes->exibirPerguntas();
    $sPergunta = $aPerguntas[0];


?>

