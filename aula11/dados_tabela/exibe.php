<?php

require_once "../conexao.php";

$connection = conexaoBanco();

$sSelect_Pessoa = 'SELECT * FROM tbpessoa';
$result = pg_query($connection, $sSelect_Pessoa);


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
