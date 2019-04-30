<?php
                            /*Errado*/
   
   
    print"Digite um número menor que 1000\n\n";
    $num = (int) fgets (STDIN);


    if ($num >= 1000) {
        print"Você devera digitar um número menor que 1000\n\n";
        exit;
    }


    
    $centenas = floor($num/100);
   
    $num = $num - ($centenas *100);
    
    $dezenas = floor($num/10);

    $num = $num - ($dezenas *10);


    if ($num > 100){
        print"$centenas centenas $dezenas dezenas e $num unidades \n\n";

    }


    if ($num < 100){
    print"$dezenas dezenas e $num unidades \n\n";



}

    