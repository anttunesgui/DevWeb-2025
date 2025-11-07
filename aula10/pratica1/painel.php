<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.html");
    exit;
}

$agora = time();
$ultima_req = $_SESSION['ultima_requisicao'];
$_SESSION['ultima_requisicao'] = $agora;

$tempo_sessao = $agora - strtotime(str_replace('/', '-', $_SESSION['inicio']));
$min = floor($tempo_sessao / 60);
$seg = $tempo_sessao % 60;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['login']); ?>!</h2>

    <p><strong>Login:</strong> <?php echo $_SESSION['login']; ?></p>
    <p><strong>Senha:</strong> <?php echo $_SESSION['senha']; ?></p>
    <p><strong>Início da sessão:</strong> <?php echo $_SESSION['inicio']; ?></p>
    <p><strong>Última requisição:</strong> <?php echo date('d/m/Y H:i:s', $ultima_req); ?></p>
    <p><strong>Tempo de sessão:</strong> <?php echo "{$min} min e {$seg} seg"; ?></p>

    <p><a href="logout.php">Encerrar sessão</a></p>
</body>
</html>
