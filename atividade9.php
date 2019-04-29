<?php
    print"Digite o 1° número: \n\n";
     $n1 = (int) fgets (STDIN);

    print"Digite o 2° número: \n\n";
     $n2 = (int) fgets (STDIN);

    print"Digite o 3° número: \n\n";
     $n3 = (int) fgets (STDIN);

   
     $ordem = ["$n1", "$n2", "$n3"];
        rsort($ordem);
        print_r($ordem);

     sleep(2);
