<?php
    
    print"\n Digite o valor de A: ";
    $a = (float) fgets(STDIN);

    if ($a == 0) {
        print"\n A equação não é do segundo grau, pois é igual a zéro.\n\n";
       

    }
    else {
    
    print "\n Digite o valor de B: ";
    $b = (float) fgets(STDIN);
    
    print "\n Digite o valor de C: ";
    $c = (float) fgets(STDIN);


    $delta = (float) pow($b,2) - (4 * $a * $c);
}

    if ($delta < 0) {
    print"\n\n A equação não possui raizes reais. O delta é negativo: $delta \n\n";
    }

    $x1 =(-$b + sqrt($delta)) / (2 * $a);
    $x2 =(-$b - sqrt($delta)) / (2 * $a);


    if ($delta == 0) {
        $x =(-$b + sqrt($delta)) / (2 * $a) ;
        print"\n A equação possue somente uma raiz, sendo ela igual a: $x1 \n\n";
    }

    if ($delta > 0) {
        print"\n\n A equação possui 2 raizes reais, sendo elas : $x1 e $x2 .\n\n";
        print " Delta = $delta \n";
        print " Valor 1, X1 = $x1 \n";
        print " Valor 2, X2 = $x2 \n";
    }