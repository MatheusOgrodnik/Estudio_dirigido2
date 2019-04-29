<?php 
print"\n Digite uma nota: \n\n ";
    $nota = (FLOAT) fgets (STDIN);

print"\n Digite outra nota: \n\n ";
    $nota_2 = (FLOAT) fgets (STDIN);

  

    $media = ($nota + $nota_2) /2;

    if ($media < 7) {
    print"Reprovado";
    }

    if ($media >=7 and $media < 9) {
    print"Aprovado";
    }

    if($media == 10) {
    print"Aprovado com Distinção";
    }