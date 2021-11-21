<?php



echo "Hoje é dia ".date('d/m/Y');
echo "<br />\n".date('D/M/y');
echo "<br /> agora são " . date('H:i:s');


/* d -> dia           -   D -> dia da semana
   m -> dia do mes    -   M -> mes atual
   Y -> ano inteiro   -   y -> ano abreviado

<br /> -> pular linha.
\n dar espaçamento 

*/


$nome = "Elton Fonseca";
echo "<br />$nome"; 



$idade1 = 10;
$idade2 = 20;
$idade3 = 10.7;
$soma = $idade1 + $idade2 + $idade3;
echo "<br/> $soma";

/*
$dia = date('d');
$mes = date('m');
$ano = date('Y');

if($dia > 27 && $mes > 09 && $ano >= 2021){
    echo "<br/> boa 06";

}else{

    echo "<br/>FUDEU";
}*/




?>