<?php

//session_start();
require_once("config.php");

//session_unset($_SESSION["nome"]); apaga só a variavel de sessao com "nome"
//session_unset($_SESSION[]); apaga todas as variaveis relacionadas com session

echo $_SESSION["nome"];

/*

session_unset -> limpa a sessao porém mantem o usuário
session_destroy -> limpa a sessao e deleta o usuario, criando um novo acesso ao servidor

*/


?>