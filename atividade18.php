<?php


$par = 0;
$cont = 0;
$impar = 0;

    
while ( $cont < 10 ) {
    $cont = $cont + 1;
        print "\n Digite um número: ";
        $num = (int) fgets(STDIN);
    
    if (( $num % 2 ) == 0 and $num != 0 ) {
    $par = $par + 1;
    }


    elseif (( $num % 2 ) != 0 and $num != 0 ) {
    $impar = $impar + 1;
    }

}
    print "\n Total de números pares digitados: $par \n ";


    print "\n Total de números impares digitados: $impar \n";