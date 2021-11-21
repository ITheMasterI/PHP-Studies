<?php

//session_id('id da sessao'); recupera o id da sessao até em pag privada

require_once("config.php");

session_regenerate_id(); // cria um novo id toda vez que a pagina é atualizada

echo session_id();


?>