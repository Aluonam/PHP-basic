<?php

    # esto va a imprimir:
    echo "<h1>Código PHP</h1>";
    print("Hola");

    //Esto no se interpreta

    /* Esto tambien es un comentario 
    pero de varias lineas */

    echo "<!-- COMENTARIO HTML -->";

    # Variables:
    # con simbolo dolar $nombre = ""  o '' y cerrar con ;

    $texto = "Hola esto es una variable";
    echo $texto;

    $altura = 164;
    $nombre = "Paula";
    $texto2 = "Repaso de PHP de $nombre";
    echo $texto2;

    #Concatenar: se usa un punto . (como en js o java se usa +, en PHP se usa . )
    echo "<h1>" . $texto . ", su altura es: " . $altura . "cm<h1>";

    echo $texto2 = "Modifico la variable";

    
?>