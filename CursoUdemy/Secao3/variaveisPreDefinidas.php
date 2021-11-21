<?php


$nome = $_GET["a"]; //array super global
//var_dump($nome);

/*
http://192.168.64.2/CursoUdemy/variaveisPreDefinidas.php?a=

até o .php é url(endereço do site)

? em diante são as variáveis (query string) que serão enviadas para a url

Toda informação que vier por GET ou POST será string

$nome = (tipo)$_GET["a"]; ... tipo = int, double, float para converter

URL é dividida em URI(uniform resource identifier) ou seja, cada pedaço da url

?a=123&b=456 ... Está enviando mais de uma informação ao navegador via get

$_SERVER pega informações do servidor e do ambiente acessado
$_SERVER["REMOTE_ADDR"] captura ip do usuario
$_SERVER["SCRIPT_NAME"] gerar sistema de log de acesso do usuário

https://www.google.com/search?q=
https -> Protocolo
www.google.com -> Dominio
/search -> path
?q=... -> Parametro(query)

*/


//Pegando ip do usuário
echo "<br/>";

$ip = $_SERVER["REMOTE_ADDR"]; //captura o ip do usuário
echo $ip;







?>