<?php
    print("Digite um letra: \n\n");
    $letra = (string) fgetc (STDIN);

    if ($letra == 'a'     or $letra == 'e'    or $letra == 'i'   or $letra == 'o'    or $letra == 'u' or $letra == 'A'     or $letra == 'E'    or $letra == 'I'   or $letra == 'O'    or $letra == 'U'){
     
            print"Letra digitada é uma vogal";
    }
    
    else{
        print"Letra digitada é uma consoante";
    }
