<?php


echo "<h1>Resumo</h1>";


//Variáveis

echo "<h3>Variáveis</h3>";


$nome = 'Pedro';
echo $nome;
echo "<br/>";


var_dump($nome); //tipo de dado, tamanho da variavel, valor
echo "<br/>";

//unset($nome); desarmazena o valor da variável

if(isset($nome)){ //confere se a variavel existe para imprimir o valor dela
    echo $nome;
}

echo "<br/>";










//Concatenar

echo "<h3>Concatenar</h3>";

echo 'Meu nome é '.$nome;
echo "<br/>";

$sobrenome = 'Carmona';
echo $nome . " " . $sobrenome;

echo "<br/>";










//Variável de variável
echo "<h3>Variável de variável</h3>";

$Pedro = 'tcholas';
echo $$nome;


echo "<br/>";












//Comparar valores

echo "<h3>Comparar valores</h3>";

if($nome == 'Pedro'){
    echo 'Verdadeiro';

}else{

    echo '<br/> Falso';
}



// >= <= == !=

$idade = 26;

if($idade >= 26){

    echo '<br/> O valor é maior que '.$idade;
}


//=== !== 
//=== significa identico, seja o valor e o tipo(int, string, float...)

$ano = '2021';

if($ano === 2021){
    echo '<br/> Ano correto';

}else{

    echo '<br/> Ano errado'; 
}

// !== significa totalmente diferente seja o valor e o tipo(int, string, float...)

if($ano !== 2021){

  echo '<br/> Totalmente diferente';

}else{

    echo '<br/> Totalmente igual'; 
}




echo '<br/> <br/>';











//Looping

echo "<h3>Looping</h3>";

for($i = 0; $i < 10; $i++){

    echo $i;
    echo '. Peitinho com for '.$i;
    echo '<hr>'; //adiciona uma linha

}

echo '<br/> <br/>';

$cont = 0;

while($cont < 10){

    echo $cont;
    echo '. Peitinho com while';
    echo '<hr>';
    $cont++;
}

echo '<br/> <br/>';


$contador = 0;

do{

    echo $contador;
    echo '. Peitinho com do-while';
    echo '<hr>';
    $contador++;

}while($contador < 10);



echo '<br/> <br/>';













//Funções

echo "<h3>Funções</h3>";

printfNumero(30);
echo '<br/>';
printfNumero(50);

function printfNumero($n){

echo $n;

}
echo '<br/>';
echo 'xereca';



echo '<br/> <br/>';











//Classes

echo "<h3>Classes</h3>";

class Pessoa{

    public $nome;
    public $idade;


    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }


    public function printfNomeIdade(){
        echo $this->nome;
        echo '<br/>';
        echo $this->idade;
    }

}

$pessoa = new Pessoa('Pedro', '21');
$pessoa->printfNomeIdade();



echo '<br/> <br/>';












//Datas

echo "<h3>Datas</h3>";

echo "Hoje é dia ".date('d/m/Y');
echo "<br />\n".date('D/M/y');
echo '<br/>Agora são '.date('h:i:s');

/* d -> dia           -   D -> dia da semana
   m -> dia do mes    -   M -> mes atual
   Y -> ano inteiro   -   y -> ano abreviado

<br /> -> pular linha.
\n dar espaçamento 

*/



echo '<br/> <br/>';











//Arrays

echo "<h3>Arrays</h3>";


$frutas = array("Morango", "Banana", "Manga");

echo $frutas;




?>