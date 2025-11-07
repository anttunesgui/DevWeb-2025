<?php
session_start();

if (!isset($_COOKIE['usuario']) || !isset($_COOKIE['inicio'])) {
    echo "<script>alert('Os dados da sessão foram perdidos (cookies expirados).');</script>";
    echo '<a href="login.html">Voltar ao login</a>';
    exit;
}

$agora = time();
$ultima_req = $_SESSION['ultima_requisicao'] ?? $agora;
$_SESSION['ultima_requisicao'] = $agora;

$tempo_sessao = $agora - strtotime(str_replace('/', '-', $_COOKIE['inicio']));
$min = floor($tempo_sessao / 60);
$seg = $tempo_sessao % 60;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel - Cookies</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_COOKIE['usuario']); ?>!</h2>

    <p><strong>Usuário (cookie):</strong> <?php echo $_COOKIE['usuario']; ?></p>
    <p><strong>Data/hora início (cookie):</strong> <?php echo $_COOKIE['inicio']; ?></p>
    <p><strong>Última requisição:</strong> <?php echo date('d/m/Y H:i:s', $ultima_req); ?></p>
    <p><strong>Tempo de sessão:</strong> <?php echo "{$min} min e {$seg} seg"; ?></p>

    <p><a href="logout.php">Encerrar sessão</a></p>
</body>
</html>
