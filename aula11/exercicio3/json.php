<?php
$arquivo = "dados.json";

function limpar($v) {
    return htmlspecialchars(trim($v), ENT_QUOTES, "UTF-8");
}

$nome = limpar($_POST["nome"] ?? "");
$sobrenome = limpar($_POST["sobrenome"] ?? "");
$email = filter_var($_POST["email"] ?? "", FILTER_SANITIZE_EMAIL);
$senha = limpar($_POST["senha"] ?? "");
$cidade = limpar($_POST["cidade"] ?? "");
$estado = limpar($_POST["estado"] ?? "");

$erros = [];

if (strlen($nome) < 2) $erros[] = "Nome inválido.";
if (strlen($sobrenome) < 2) $erros[] = "Sobrenome inválido.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = "Email inválido.";
if (strlen($senha) < 4) $erros[] = "Senha inválida.";
if (strlen($cidade) < 2) $erros[] = "Cidade inválida.";
if (strlen($estado) < 2) $erros[] = "Estado inválido.";

if ($erros) {
    foreach ($erros as $e) echo "<p>$e</p>";
    echo "<a href='index.html'>Voltar</a>";
    exit;
}

if (!file_exists($arquivo)) file_put_contents($arquivo, json_encode([]));

$registros = json_decode(file_get_contents($arquivo), true);

$novo = [
    "nome" => $nome,
    "sobrenome" => $sobrenome,
    "email" => $email,
    "senha" => password_hash($senha, PASSWORD_DEFAULT),
    "cidade" => $cidade,
    "estado" => $estado
];

$registros[] = $novo;

file_put_contents($arquivo, json_encode($registros, JSON_PRETTY_PRINT));

echo "<h3>Cadastro salvo!</h3>";
echo "<a href='index.html'>Voltar</a>";
