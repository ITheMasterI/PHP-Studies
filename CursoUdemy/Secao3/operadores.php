<?php

/*

. -> operador de string (junta 2 strings)
.= -> pega a variavel existente e adiciona mais coisas

+= -> pega o valor da variavel e soma;
-= -> pega o valor da variavel e subtrai;
*= -> pega o valor da variavel e multiplica;
/= -> pega o valor da variavel e divide;


== igualdade de valor
=== igualdade de identidade
!= diferença de valor
!== diferença de identidade

<=> se o primeiro for maior retorna 1, se for igual retorna 0, se o segundo for maior retorna -1

*/


$nome = 'Pedro';

echo $nome . " Carmona";


echo "<br/>";


$nome .= " Tchais"; 
echo $nome;


echo "<br/>";

echo "<hr>";




echo "<h2> Operadores de comparação</h2>";

$a = 55.0;
$b = 55;

var_dump($a == $b); // compara só os valores
//echo $a == $b; retorna 1(true)

echo "<br/>";

var_dump($a === $b); // compara o valor e o tipo da variavel


echo "<hr>";


echo "<br/>";

//var_dump(a <=> b);



echo "<br/>";

$k = NULL;
$a;
$f = NUll;

echo $k ?? $a ?? $f; // se k for nulo vai pro a, se a for nulo vai pro f



echo "<hr>";
echo "<br/>";


$g = 10;

echo $g++; //vai imprimir o valor 10 porem não vai incrementar nesse echo
echo "<br>";
echo $g;

echo "<br>";

$p = 10;
echo ++$p; // incrementa e mostra o valor


?>
