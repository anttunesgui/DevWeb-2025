<?php

require_once "../conexao.php";

$connection = conexaoBanco();

$filtro = $_GET['nome'] ?? '';

if ($filtro) {
    $sql = "SELECT * FROM tbpessoa WHERE pesnome ILIKE $1";
    $result = pg_query_params($connection, $sql, ["%$filtro%"]);
} else {
    $sql = "SELECT * FROM tbpessoa";
    $result = pg_query($connection, $sql);
}


while ($row = pg_fetch_assoc($result)){
    echo '<tr>
            <td>' . $row['pesnome'] . '</td>
            <td>' . $row['pessobrenome'] . '</td>
            <td>' . $row['pesemail'] . '</td>
            <td>' . $row['pespassword'] . '</td>
            <td>' . $row['pescidade'] . '</td>
            <td>' . $row['pesestado'] . '</td>
          </tr>';
}
