<?php
    $SALARIO1 = 1000;
    $SALARIO2 = 2000;

    $SALARIO2 = $SALARIO1;
    $SALARIO2++;
    $SALARIO1 *=1.10;

    echo 'Valor salario 1:  ' .$SALARIO1 .'<br> Valor salario 2: '.$SALARIO2.'<br>';

    if ($SALARIO1 > $SALARIO2){
        echo 'O valor da variavel 1 é maior que o valor da variavel 2 <br>';
    }elseif($SALARIO2 > $SALARIO2){
        echo 'O valor da variavel 2 é maior que o valor da variavel 1 <br>';
    }else{
        echo "Os valores são iguais";
    }


    for ($i=1;  $i <= 100 ; $i++) { 
        $SALARIO1++;
        if ($i == 50){
            break;
        }   # code...
    }
    if($SALARIO1 < $SALARIO2){
        echo $SALARIO1;
    }


    $idade = array("Antunes" => "19", "Guilherme" => "20", "Rodrigues" => "21");
    foreach ($idade as $key => $value) {
        echo "Chave =".$key .", Valor=" .$value. '<br>';
    }