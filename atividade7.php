<?php
    print"Digite o 1º número\n\n";
    $n1 = (FLOAT) fgets (STDIN);


    print"Digite o 2º número\n\n";
    $n2 = (FLOAT) fgets (STDIN);


    print"Digite o 3º número\n\n";
    $n3 = (FLOAT) fgets (STDIN);



    if ($n1 >= $n2 and $n1 >= $n3) {        
        print"\n\n O maior número digitado foi: $n1\n";
    }
    
    if ($n1 <= $n2 and $n1 <= $n3 ) {  
        print"\n\n O menor número digitado foi: $n1\n";
    }

    if ($n2 >= $n1 and $n2 >= $n3) {
        print"\n\n O maior número digitado foi: $n2\n";
    }
    if ($n2 <= $n1 and $n2 <= $n3 ) {
        print"\n\n O menor número digitado foi: $n2\n";
    }

    if ($n3 >= $n1 and $n3 >= $n2) {
        print"\n\n O maior número digitado foi: $n3\n";
        }
    if ($n3 <= $n1 or $n3 <= $n2 ) {
        print"\n\n O menor número digitado foi: $n3\n";
}