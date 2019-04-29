<?php
    print"Qual o preço do 1º produto, em R$ : \n\n ";
    $prod_1 = (FLOAT) fgets (STDIN);
    

    print"Qual o preço do 2º produto em R$ : \n\n ";
    $prod_2 = (FLOAT) fgets (STDIN);


    print"Qual o preço do 3º produto em R$ : \n\n ";
    $prod_3 = (FLOAT) fgets (STDIN);


    
    
    if ($prod_1 < $prod_2 and $prod_1 < $prod_3){
        print"Você deveria comprar o 1° produto, pois é o mais barato";
    }

    if ($prod_2 < $prod_1 and $prod_2 < $prod_3){
        print"Você deveria comprar o 2° produto, pois é o mais barato";
    }

    if ($prod_3 < $prod_2 and $prod_3 < $prod_1){
        print"Você deveria comprar o 3° produto, pois é o mais barato";
    }