<?php
session_start();
session_unset();
session_destroy();

echo "<p>Sessão encerrada com sucesso!</p>";
echo '<a href="login.html">Voltar ao login</a>';
?>
