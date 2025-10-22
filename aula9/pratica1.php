<?php
    $notas=array(7,7,9,4,8);
    $faltas=array(1,2,0,4);

    function mediaNotas($notas){
        $result = 0;
        foreach ($notas as $k => $nt){
            $result+= $nt;
        }
        $result = $result/count($notas);
        return $result;
    }

    function verificaAprovacao($mediaNotas){
        $aprovacao =  ($mediaNotas >= 7);
        return $aprovacao;
    }
 
    function calculaFrequencia($faltas){
        $ausente = 0;
        foreach ($faltas as $k => $flt) {
            $ausente += $flt;  # code...
        }
        $frequencia = ($ausente/(count($faltas)*4))*100;
        return $frequencia;
    }

    $mediaNotas = mediaNotas($notas);
    echo 'Media: '. mediaNotas($notas).'<br>';
    if (verificaAprovacao($mediaNotas)){
        echo 'Aprovado <br>';
    }else{
        echo 'Reprovado <br>';
    }

    echo 'Frequencia: '.calculaFrequencia($faltas);
?>
