<?php
    print"Qual seu Sexo? \n";
    $sexo = (string) fgetc (STDIN);

    $f =  "f";
    $m =  "m";

    if ($sexo == $f) {
        print"\n\n Feminino \n\n";
    }
    if ($sexo == $m) { 
        print"\n\n Masculino \n\n";
    }
    if ($sexo <> $f and $sexo <> $m) {
        print "\n\n Sexo invalido \n\n";   
     }