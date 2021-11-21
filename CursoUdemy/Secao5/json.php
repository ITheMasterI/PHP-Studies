<?php

//transformando array em json

$pessoas = array();

array_push($pessoas, array(

    'nome' => 'Pedro',
    'idade' => 21

));



array_push($pessoas, array(

    'nome' => 'José',
    'idade' => 44

));

echo json_encode($pessoas);


?>