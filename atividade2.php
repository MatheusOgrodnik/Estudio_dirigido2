<?php
    print"Digite um número : \n\n";
    $num = (FLOAT)fgets (STDIN);


    if ($num <= -1 and $num <> 0 ) {
        print"O número digitado é NEGATIVO \n";
    }
    
    if ($num >= 1 and $num <> 0) {
        print"O número digitado é POSÍTIVO \n";
    }

    if ($num == 0) {
        print"O número digitado é NEUTRO \n";
     }
     