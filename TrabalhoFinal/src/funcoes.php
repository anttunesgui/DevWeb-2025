<?php
require_once 'db.php';

class Funcoes {
    
    public function exibirPerguntas() {
        $conn = conexaoBanco();
        $query = "SELECT id_pergunta, texto_pergunta FROM perguntas WHERE status = 'ativa' ORDER BY id_pergunta ASC";
        $result = pg_query($conn, $query);
        return pg_fetch_all($result) ?: [];
    }
}

function getPerguntas() {
    $funcoes = new Funcoes();
    return $funcoes->exibirPerguntas();
}
?>