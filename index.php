<?php

    $frutas = array ("platano", "manzana", "uvas","fresa"); //Creamos $ElNombre del Array y sus ("Elementos") 
    
    print_r($frutas);//print_r para impremir el arreglo completo con su valor [0] y su nombre ("Elementos")

	 echo "<br>";//salto de linea HTML

	 echo $frutas[3];//Imprime El valor de la posicion del array que se cuenta desde [0] al [3]
    
    echo "<br>";
    
    
	 echo count($frutas). " elemento";/*Imprime la cantida de elementos del array no de su [valor] que es 0
												  devuelve 4 ." String"*/
    
	 echo "<br>";

	 echo "<br>";
    
	 for($si = 0; $si < count($frutas); $si++){//Hacemos un ciclo for para imprimir los [valores] de los ("elementos")

        echo $frutas[$si] . "<br />";//frutas[0] hasta que $si sea mayor la cantidad de los [valores] de frutas
        
    }


	 echo "<br>";




    $edades = array ("Marcos" => 34, "Tania" => 23, "Onear" => 27);// ahora ["Elementos"] => valor del elemento
    
    print_r($edades);//imprimimos la cantidad de [elementos] => con su valor
    
    echo "<br >";
    
    echo $edades['Tania'];//imprimimos el valor o la edad de tania
    
    echo "<br ";
    
    foreach($edades as $key => $value){/*tenemos foreach como unico siclo para los Arrays */
        echo $key . " tiene el valor de " . $value . "<br />";//llamamos al valores 
	 }

?>
