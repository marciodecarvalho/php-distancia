<?php
header('Content-Type: text/html; charset=utf-8');

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
$db_link = mysqli_connect(DB_HOST, DB_USER, DB_PASS) or die(mysql_error());
mysqli_select_db($db_link, DB_BASE);


function consulta_dados($query){
    global $db_link;
    $resultado = mysqli_query($db_link, $query);
    return $resultado;
}
