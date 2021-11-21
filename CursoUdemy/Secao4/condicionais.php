<?php
$nome = 'Pedro';

if($nome == "Pedro"){
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

$ano = '2021'; // aqui é do tipo string

if($ano === 2021){ // aqui é do tipo int
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

?>