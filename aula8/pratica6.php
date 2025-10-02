<?php

    $aMatriz = array(array("Disciplina" => "Matematica","Faltas" => "5","Media" => "8.5"),
                    array("Disciplina" => "Portugues","Faltas" => "2","Media" => "9"),
                    array("Disciplina" => "Geografia","Faltas" => "10","Media" => "6"),
                    array("Disciplina" => "Educacao fisica","Faltas" => "2","Media" => "8"));

         
    echo "<table border= '1px' solid black>";

    echo "<tr>
            <th>Disciplina</th>
            <th>Faltas</th>
            <th>Media</th>
          </tr>";
    

    foreach ($aMatriz as $k) {
        echo '<tr>';
        echo   '<td>'.$k["Disciplina"] .'</td>';
        echo   '<td>'.$k["Faltas"] .'</td>'; 
        echo   '<td>'.$k["Media"] .'</td>';     
        echo '</tr>';        
    }         



                                

    