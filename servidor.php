<?php

if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1'){
        define ('DB_HOST', 'localhost', true);
        define ('DB_USER', 'root', true);
        define ('DB_PASS', '', true);
        define ('DB_BASE', 'phponline', true);
        
    }elseif($_SERVER['SERVER_NAME'] == 'mysql110.f1.k8.com.br' || $_SERVER['SERVER_NAME'] = 'www.marciodecarvalho.com.br'){
        define ('DB_HOST', 'mysql110.f1.k8.com.br', true);
        define ('DB_USER', 'marciodecarvalh', true);
        define ('DB_PASS', 'marcio280369', true);
        define ('DB_BASE', 'marciodecarvalho', true);
}
// Estabelecimento conexção com o banco de dados
mysql_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysql_select_db(DB_BASE) or die(mysql_error());

$query = mysql_query('select * from livros'); // Conectando ao banco de dados
$livros = mysql_fetch_array($query);

function consulta_dados($query){
    $resultado = mysql_query($query) or die (mysql_errno());
    return $resultado;
}
$query = consulta_dados("select * from livros");

while ($livros = mysql_fetch_array($query)){
    echo $livros['titulo'] . '<br />';
}
/*
print_r($_SERVER);
 * verifica o nome do host name, se está online ou localhost
 */