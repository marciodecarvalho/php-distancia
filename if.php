<?php
header('Content-Type: text/html; charset=utf-8');

$idade =18;
if($idade >= 18){
    echo 'Você é maior de idade';
}
/*
 * operadores Lógicos
 * == Igualdade
 * != Desigualdade
 * > Maior que
 * >= Maior que ou Igual a
 * < Menor que
 * <= Menor que ou Igual a
 * && E
 * || OU
 */
 echo '<br><hr><br>';


 $nacionalidade = 'brasileira';
 
 if($idade >= 18 && $nacionalidade != 'brasileira'){
     echo 'Seja bem vindo.';
 }else{
     echo 'Você não tem acesso a esta área';
 }
 
 echo '<br><hr><br>';
 
 $idade = 17;
 if($idade >= 18 && $nacionalidade != 'brasileira'){
     echo 'Seja bem vindo';
 }elseif($idade < 18){
     echo ' Você precisa ter mais de 18 anos de idade para acessar esta área.';
 }elseif ($nacionalidade == 'brasileira') {
     echo 'Em breve terá acesso a esta área'; 
 }else{
     echo 'Desculpe você não tem aceeso a esta área';
 }
 
 echo '<br><hr><br>';
 
 $verdade = false;
 if(!$verdade){
     echo 'Não é verdade';
 }