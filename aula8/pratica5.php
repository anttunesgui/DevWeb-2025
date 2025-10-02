<?php

    $aDisciplinas = array("Estrutura de dados","Eng de Software 2", "Adm de Sistemas de infromação", "Programacao web","Banco de dados 2");
    $aProfessor = array("Fernando","Julian","Marciel","Cleber","Marco");

    for ($i=0 ; $i < 5 ; $i++) { 
        echo 'Disciplina: '.$aDisciplinas[$i] . ', Professor: '.$aProfessor[$i] .'<br>';        
    }
