<?php

$nome = 'Pedro';

function teste1(){

    global $nome; // define a mesma variável $nome dentro e fora da função
    echo $nome;

}



function teste2(){
   
$nome = 'João';

echo "<br/>". $nome;

}


teste1(); //invoca a função
teste2();

?>