<?php

//transformando json em array



$json = '[{"nome":"Pedro","idade":21},{ "nome":"José","idade":44}]';

$data = json_decode($json, true);

var_dump($data);




?>