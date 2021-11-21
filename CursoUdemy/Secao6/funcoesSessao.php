<?php

require_once("config.php");

/*

session_start(); -> inicia uma sessao
session_regenerate_id(); -> cria um novo id toda vez que a pagina é atualizada
session_id('id da sessao'); -> recupera o id da sessao até em pag privada
session_status(); -> identifica o status atual da sessão
*/

session_status();


switch(session_status()){

    case PHP_SESSION_DISABLED:
    echo "As sessões estão desabilitadas";   
    break;


    case PHP_SESSION_NONE:
        echo "As sessões estão habilitadas porém não estão ativas";   
        break;


    case PHP_SESSION_ACTIVE:     
        echo "As sessões estão habilitadas e estão ativas";   
        break;


}





?>