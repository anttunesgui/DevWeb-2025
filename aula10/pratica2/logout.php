<?php
session_start();
session_unset();
session_destroy();

setcookie("usuario", "", time() - 3600, "/");
setcookie("inicio", "", time() - 3600, "/");

echo "<p>Sessão e cookies encerrados!</p>";
echo '<a href="login.html">Voltar ao login</a>';
?>
