<?php
//Unidimensional (vetor)
$frutas = array("laranja", "morango", "abacaxi");

print_r($frutas);


echo "<br/>";

//Bidimensional (matriz)

$carros[2][2];


    for($i = 0; $i < 2; $i++){

        echo "<br/>Carro".$i;

        for($j = 0; $j < 2; $j++){

            echo "<br/>Modelo".$j;

        }
    }


    echo "<br/><br/>";


//echo end[posicao] -> imprime o ultimo elemento que está na posicao


$pessoas = array();

array_push($pessoas, array(

    'nome' => 'Pedro',
    'idade' => 21

));



array_push($pessoas, array(

    'nome' => 'José',
    'idade' => 44

));

print_r($pessoas);

?>