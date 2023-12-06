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

    $altura = 169;
    $nombre = "Paula";
    $texto2 = "Repaso de PHP de $nombre";
    echo $texto2;

    #Concatenar: se usa un punto . (como en js o java se usa +, en PHP se usa . )
    echo "<h1>" . $texto . ", su altura es: " . $altura . "cm<h1>";

    echo $texto;
    echo "<br>";
    echo $texto;
    echo "<br>";
    
    $texto2 = "Modifico la variable";
    echo "<br>";
    
    # usar .= permite unir el contenido anterior al actual
    echo $texto2 .= " Y añado este texto";

    #puedo recibir variables de diferentes formas por ejemplo GET

    #--------------------------------------------------------
    #Recibir variables por GET (por URL)
    #Se usa $_GET["nombreDeLaVariableQuePasoPorURL"];
    /*Ejemplo: http://localhost:8080/ejemplos/index.php?nombre=manolin  
    (he escrito ?nombre=manolin que es ? y el nombre de la variable que defino aquí = el nombre que yo quiera)
    */
    echo "<hr>";
    echo $_GET["nombre"];

    #Añadir varias variables por GET 
    #Se usa & 
    #Si se declara que se reciben dos variables y en la url solo se pone una dará error (se soluciona añadiendo condiciones).

    echo $_GET["apellido"];
    #Ejemplo: localhost:8080/ejemplos/index.php?nombre=Federico&apellido=Garcia


    #CONDICIONES:

    if($altura>= 165){
        echo '<h3 style="background:green"> Eres alto </h3>';
    } else {
        echo "<h3> Eres bajito </h3>";
    }

    #Otros operadores:
    /*
    + sumar
    ‐ restar
    * multiplicar
    / dividir
    % sacar el cociente

    Asignación: =
    Igualdad: ==
    Distinto: !=
    Negación: !
    Y: &&
    O: ||
    */


?>