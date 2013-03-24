<?php
header('Content-Type: text/html; charset=utf-8');

    /*
       A função "func_num_args()" Retorna numeros de dados passados ha função
       A função "func_get_arg() " Retorna somente um argumeto
       A função "func_get_args () " Retorna um Array com todos os argumentos  
    */

function foo(){
    $numeros_de_argumentos = func_num_args();
    echo 'Número de argumentos: ' . $numeros_de_argumentos . '<br />';

    if ($numeros_de_argumentos >= 2){
        echo 'O segundo arguento é : ' . func_get_arg(1) . '<br />';
    }
    $argumentos = func_get_args();
    foreach ($argumentos as $variavel => $valor) {
        echo 'Argumeto ' . $variavel . ' é ' . $valor . '<br />' ;
    }
}

foo(1, 2, 'oi', 'tudo','bem', 10);
