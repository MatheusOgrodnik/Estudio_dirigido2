<?php
    print"Digite o 1º número\n\n";
    $n1 = (FLOAT) fgets (STDIN);


    print"Digite o 2º número\n\n";
    $n2 = (FLOAT) fgets (STDIN);


    print"Digite o 3º número\n\n";
    $n3 = (FLOAT) fgets (STDIN);
    

    print"Digite o 4º número\n\n";
    $n4 = (FLOAT) fgets (STDIN);


    print"Digite o 5º número\n\n";
    $n5 = (FLOAT) fgets (STDIN);

    
$soma = $n1 + $n2 +  $n3 +  $n4 + $n5;
$media = ($n1 + $n2 +  $n3 +  $n4 + $n5)/5;

print"\n\n A soma dos números é de : $soma\n\n";
print"\n\n A média dos números é de : $media\n\n";
