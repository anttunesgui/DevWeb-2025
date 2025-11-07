<?php
session_start();

$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($login === 'admin' && $senha === '1234') {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['inicio'] = date('d/m/Y H:i:s');
    $_SESSION['ultima_requisicao'] = time();

    setcookie("usuario", $login, time() + 60 * 5, "/");
    setcookie("inicio", $_SESSION['inicio'], time() + 60 * 5, "/");

    header("Location: painel.php");
    exit;
} else {
    echo "<p>Login ou senha incorretos!</p>";
    echo '<a href="login.html">Voltar</a>';
}
?>
