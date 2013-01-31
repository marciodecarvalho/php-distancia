<?php
header('Content-Type: text/html; charset=utf-8');

$idade =18;
$nacionalidade = 'brasileira';
 
// 1ª Forma, esta não recomendada.

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
 
 // 2ª Forma, esta é muito bem recomendada e aconselhada.
 
 if($idade >= 18 && $nacionalidade != 'brasileira'){
     echo 'Seja bem vindo';
 }
 elseif($idade < 18){
     echo ' Você precisa ter mais de 18 anos de idade para acessar esta área.';
 }
 elseif ($nacionalidade == 'brasileira') {
     echo 'Em breve terá acesso a esta área'; 
 }
 else{
     echo 'Desculpe você não tem aceeso a esta área';
 }
 
 echo '<br><hr><br>';
 
 // 3ª Forma
 
 if($idade >= 18 && $nacionalidade != 'brasileira'):
     echo 'Seja bem vindo';
 
 elseif($idade < 18):
     echo ' Você precisa ter mais de 18 anos de idade para acessar esta área.';
 
 elseif ($nacionalidade == 'brasileira') :
     echo 'Em breve terá acesso a esta área'; 
 
 else:
     echo 'Desculpe você não tem aceeso a esta área';
 endif;