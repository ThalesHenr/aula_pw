<?php

echo "<br>";

function Msg(){

    echo "Estou dentro de uma função.<br>";
}

echo "Este texto está fora da função, ou seja script geral<br>";

//chamar uma função 
echo "<br>";
Msg();

//function nomeada por argumento (parametro)

function Ola( $nome ) {

    echo "<br>Seja bem vindo, $nome.";
} 

//chamar a função

$v = "Julia";

Ola($v); 

$anoAtual = 2022;
$anoNasc = 1983;

function Idade ($par01, $par02){

    $idade = $par01 - $par02; 
    echo "$idade";
}

function Vota ($par01, $par02){

    $idade = $par01 - $par02; 
    return $idade;
}

echo ("<br><br>");

Idade($anoAtual, $anoNasc );

//return 

echo "<br><br>";

$resp = Vota($anoAtual, $anoNasc);

if($resp >= 18){

    echo "Pode votar";

}
else{

    "Não pode votar";
}

echo "<br>";

function Soma(int $par01, int $par02):int 
{
    $total = $par01 + $par02;
    return $total; 
}

$t = Soma (20, 100);

echo"<br>";

echo $t;

?>