<?php

$ip = $_SERVER["REMOTE_ADDR"];

define("SERVIDOR", "$ip");

echo SERVIDOR;


echo "<br/><br/> <h2>var_dump()</h2>";

define("BANCO_DE_DADOS", [

    "$ip <br/>",
    "root <br/>",
    "password <br/>",
    "test <br/>",
    12345
]); //nao pode usar espaço
// ], true); vira case insensitivy

var_dump(BANCO_DE_DADOS);


echo "<br/><br/><h2>print_r()</h2>";
print_r(BANCO_DE_DADOS);



echo "<br/><br/><h2>Constantes</h2>";

echo PHP_VERSION;

echo "<br>";

echo DIRECTORY_SEPARATOR;








?>