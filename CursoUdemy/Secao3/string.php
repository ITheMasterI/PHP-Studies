<?php


$nome = "Pedro";

$nome2 = 'Carmona';

var_dump($nome, $nome2);


/*

' ' (aspas simples) -> Entende que o conteúdo dentro é um texto

" " (aspas duplas) -> Faz uma verificação para ver se possui alguma variavel



                         Funcões de string



strtoupper() -> converte em maisculo
strtolower() -> converte em minusculo

ucfirst() -> converte em maisculo só a primeira palavra
ucwords() -> converte em maisculo primeira letra de cada palavra

str_replace("primeiro parametro", "segundo parametro", variavel) -> 
troca o primeiro parametro pelo segundo

strpos(variavel, "parametro") -> busca a posicao da palavra na frase
substr(variavel, posicao, variavel) -> imprime a frase a partir da posicao
inserida
*/


echo "<br/>";
echo "Nome: $nome";

echo "<br/>";
echo 'Nome: $nome';


echo "<br/>";

unset($nome);


//---------------------Funções----------------------------

echo "<h2>Funções</h2>";


$nome = "pedro carmona";



$nome = strtoupper($nome);
echo $nome;

echo "<br/>";







$nome = strtolower($nome);
echo $nome;

echo "<br/>";







$nome = ucfirst($nome);
echo $nome;

echo "<br/>";






$nome = ucwords($nome);
echo $nome;

echo "<br/>";



$nome = str_replace("o", "0", $nome);
echo $nome;




echo "<h2>Funções 2</h2>";




$frase = "Where is the Spider-Man";

$q = strpos($frase, "Spider-Man");
var_dump($q);

echo "<br>";







$texto = substr($frase, 0, $q);
var_dump($texto);

echo "<br>";






$texto2 = substr($frase, $q);
var_dump($texto2);

echo "<br>";




/*
$palavra = "Spider-Man";
$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto3);*/


?>