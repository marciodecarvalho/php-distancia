<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf-8');
$nome = 'Maycon';

//Testa se a variavel existe:
if (isset($nome)) {

    //Testa se a variavel não está vazia:
    if (!empty($nome)) {
        echo 'Seu nome é ' . $nome;
    } else {
        echo 'Você não preencheu o campo nome.';
    }
} else {
    echo 'Variavel não existe.';
}
?>
