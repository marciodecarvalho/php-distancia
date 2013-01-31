<?php
header('Content-Type: text/html; charset=utf-8');

$var1 = 10;
$var2 = 20;
$var3 = 30;

echo '<br>';
// adição
echo $var1 + $var2;
echo '<br>';

// subtração
echo $var1 - $var2;
echo '<br>';

// Multiplicação
echo $var1 * $var2;
echo '<br>';

// Divisão
echo $var1 / $var2;
echo '<br>';

// Modulo Indica o resto da divisão
echo $var1 % 3;
echo '<br>';

echo $var2 % 3;
echo '<br>';

echo $var3 % 3;
echo '<br>';

// Ordem das operação, 1º Multiplicação, 2º Divisão, 3º Soma, 4º subtração
// a ordem é da esquerda para a direita e aspas se concluem primeiro.
echo $var1 + $var2 * $var3;
echo'<br>';

echo ($var1 + $var2) * $var3;
echo'<br>';

// Incrementos de tres formas
$var1 = $var1 + 1;
echo $var1;
echo '<br>';

//ou

$var1++;
echo $var1;
echo '<br>';

//ou

$var1 += 10;
echo $var1;
echo '<br>';

//Decremento de duas formas
$var1 = $var1 - 1;
echo $var1;
echo '<br>';

 //ou

$var1--;
echo $var1;
echo '<br>';

/*
$aviso = '';
$aviso .= 'Minha mensagem de aviso';
echo $aviso;
echo '<br>';

//ou

$aviso = $aviso . 'Minha Mensagem de Aviso';
echo $aviso;
echo '<br>';
 */
