<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php
// Mostra a data de hoje
echo date('d') . '/' . date('m') . '/' . date('y');
echo '<br><hr><br>';

// Mostra a data de hoje com string
 echo 'Hoje é ';
echo date('d/m/y');
echo '<br><hr><br>';

// Mostra a data de hoje em segundos.
echo time();
echo '<br><hr><br>';

$agora = time();
$prazo = time() + ((60*60*24) * 30); //calculo para data de um mes, esta formula calcula um mes, soma-se 60 segundos veses 60 minutos veses 24 horas veses 30 dias

// Mostra a data de hoje em segundos
echo $prazo;
echo ' ==> Este formato está em segundo, abaixo  estará formatado com bom entendimento. ';

echo '<br><hr><br>';

echo date('d/m/y', $prazo);
echo '<br><hr><br>';

// A função mktime() retorna o time stamp dos parametros indicados
// no caso abaixo coloquei os seguintes parâmetros:
// Hora 0, Minuto 0, Segundo 0, Mês 12, Dia 31 e ano 2013 
$fim_do_mundo = mktime(0, 0, 0, 12, 31, 2013);

$fim_do_mundo_segundos = $fim_do_mundo - time(); /* esta linha faz com que a data do fim do mundo menos a data de hoje*/

// Mostra o time stamp no formato em segundos
echo $fim_do_mundo;
echo '<br';

echo '<br><hr><br>';
/* Mostra o time stamp no formato normal de data */
echo date('d/m/y', $fim_do_mundo);

echo '<br><hr><br>';
echo 'Faltan ' . number_format($fim_do_mundo_segundos, 0, ',', '.' ) .  ' segundos para o fim do mundo';

