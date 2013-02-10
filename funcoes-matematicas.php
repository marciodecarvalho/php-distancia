<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
 

echo '<br><hr><br>';
echo 'Gera um número randômico entre  0 e 10. ';
echo '<br>';
echo mt_rand(0, 10);
echo '<br>';

/*
for($i = 0; $i < 300; $i++){
    echo mt_rand(0, 10);
}
 */

echo '<br><hr><br>';
echo 'Arredonda para baixo. ';
echo '<br>';
echo floor(5.9);
echo '<br>';

echo '<br><hr><br>';
echo 'Arredonda para cima. ';
echo '<br>';
echo ceil(5.1);
echo '<br>';

echo '<br><hr><br>';
echo 'Arredonda para o mais próximo. ';
echo '<br>';
echo round(5.1);
echo '<br>';

echo '<br><hr><br>';
echo 'Arredonda para o mais próximo. ';
echo '<br>';
echo round(5.9);
echo '<br>';

echo '<br><hr><br>';
$valor = 12345.91;
echo 'Transforma numeros decimais em valores monetário com virgula e ponto. ';
echo '<br>';
echo  'R$' . number_format($valor, 2, ',' , '.');
echo '<br>';

echo '<br><hr><br>';
echo 'Transforma qualquer número em absoluto, retirando o negativo. ';
echo '<br>';
echo abs(-10);
echo '<br>';

echo '<br><hr><br>';
echo 'Pontencializa o número, com seu expoente. ';
echo '<br>';
echo pow(2, 4);
echo '<br>';

echo '<br><hr><br>';
echo 'Retorna o número máximo que encontrar. ';
echo '<br>';
echo max(2, 4, 6, 8, 12);
echo '<br>';

echo '<br><hr><br>';
echo 'Retorna o número mínimo que encontrar. ';
echo '<br>';
echo min(2, 4, 6, 8, 12);
echo '<br>';

echo '<br><hr><br>';
echo 'Converte número decimal para hexadecimal. ';
echo '<br>';
echo dechex(255);
echo '<br>';

echo '<br><hr><br>';
echo 'Converte número hexadecimal para decimal. ';
echo '<br>';
echo hexdec(100);
echo '<br>';

echo '<br><hr><br>';
echo 'Converte número decimal para binário. ';
echo '<br>';
echo decbin(2);
echo '<br>';

echo '<br><hr><br>';
echo 'Converte número decimal para binário. ';
echo '<br>';
echo bindec(101);
echo '<br>';