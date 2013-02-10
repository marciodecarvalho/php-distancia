<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

$texto = 'O rato roeu a roupa do rei de Roma';

//Contagem
echo 'Conta quantos caracteres tem a frase ';
echo '<br>';
echo strlen($texto);
echo '<br>';
echo '<br><hr><br>';
echo 'Conta quantos caracteres (r) tem a frase ';
echo '<br>';
echo substr_count($texto, 'r');

echo '<br><hr><br>';

//Localização
echo 'Conta 02 caracteres e apresenta os proximos 4 caracteres que contem na frase, que e a palavra ';
echo '<br>';
echo substr($texto, 2, 4);
echo '<br>';

echo '<br><hr><br>';

echo ' Retorna a posição do primeiro caracter que informei';
echo '<br>';
echo strpos($texto, 'r');
echo '<br>';

echo '<br><hr><br>';

echo 'Retorna a posição do primeiro caracter que informei ';
echo '<br>';
echo strpos($texto, 'R');
echo '<br>';

echo '<br><hr><br>';

echo 'Retorna a posição do caracter que informei da direita para esquerda';
echo '<br>';
echo strrpos($texto, 'r');
echo '<br>';

echo '<br><hr><br>';

echo 'Retorna a posição do caracter que informei da direita para esquerda';
echo '<br>';
echo strrpos($texto, 'R');
echo '<br>';

echo '<br><hr><br>';

echo 'Retorna a primeira posição e ignora maiuscula ou minuscula ';
echo '<br>';
echo stripos($texto, 'R');
echo '<br>';

echo '<br><hr><br>';

echo 'Retorna a última posição e ignora maiuscula ou minuscula ';
echo '<br>';
echo strripos($texto, 'R');
echo '<br>';

//Substituição
echo '<br><hr><br>';
echo 'Substituir caracter em branco por nada, retornando o texto sem espaço. ';
echo '<br>';
echo str_replace(' ', '', $texto);
echo '<br>';

echo '<br><hr><br>';
echo 'Substituir caracter r, pelo caracter $, exceto caracteres maiúsculos. ';
echo '<br>';
echo str_replace('r', '$', $texto);
echo '<br>';

echo '<br><hr><br>';
echo 'Substituir caracter r, pelo caracter $, inclusive o caracter maiúsculo "Case sensetive" ';
echo '<br>';
echo str_ireplace('r', '$', $texto);
echo '<br>';

//Modificação
echo '<br><hr><br>';
echo 'Remove todos os espaços em branco no final da String. ';
echo '<br>';
echo rtrim($texto);
echo '<br>';

echo '<br><hr><br>';
echo 'Remove todos os espaços em branco no inicio da String. ';
echo '<br>';
echo ltrim($texto);
echo '<br>';

echo '<br><hr><br>';
echo 'Remove todos os espaços em branco no inicio e no fim da String. ';
echo '<br>';
echo trim($texto);
echo '<br>';

echo '<br><hr><br>';
echo 'Transforma a String toda em maiúscula. ';
echo '<br>';
echo strtoupper($texto);
echo '<br>';

echo '<br><hr><br>';
echo 'Transforma a String toda em minuscula. ';
echo '<br>';
echo strtolower($texto);
echo '<br>';

echo '<br><hr><br>';
echo 'Transforma o primeiro caracter maiúscula. ';
echo '<br>';
echo ucfirst($texto);
echo '<br>';