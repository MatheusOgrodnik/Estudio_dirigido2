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

    
    
    if ($n1 > $n2 and $n1 > $n3 and $n1 > $n4 and $n1 > $n5) {        
        print"\n\n O maior número digitado foi o 1º : $n1\n";
    }
    
    if ($n2 > $n1 and $n2 > $n3 and $n2 > $n4 and $n2 > $n5 ) {  
        print"\n\n O maior número digitado foi o 2º : $n2\n";
    }

    if ($n3 > $n1 and $n3 > $n2 and $n3 > $n4 and $n3 > $n5) { 
        print"\n\nO maior número digitado foi o 3º : $n3\n";
    }

    if ($n4 > $n1 and $n4 > $n2 and $n4 > $n3 and $n4 > $n5) { 
        print"\n\nO maior número digitado foi o 4º : $n4\n";
    }

    if ($n5 > $n1 and $n5 > $n2 and $n5 > $n3 and $n5 > $n4) { 
        print"\n\nO maior número digitado foi o 5º : $n5\n";
    }

    