<?php
    print"\n\n Digite a base: \n\n ";
    $base = (FLOAT) fgets (STDIN);

    print"\n\n Digite o expoente: \n\n ";
    $exp = (FLOAT) fgets (STDIN);

    $total = $base;
    $cont = 1;

    if ($exp == 0 ){
      print"\n\n $base ^ $exp = 1 \n\n";
    }

else{

  while ($cont < $exp) {
  $total = $total * $base;

  $cont = $cont + 1;
}

print"\n $base ^ $exp = $total \n ";

}
    
     



  