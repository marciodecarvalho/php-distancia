<?php
header('Content-Type: text/html; charset=utf-8');

$fim_do_mundo = mktime(0, 0, 0, 12, 30, 2013);
echo '<br>';
$fim_do_mundo_segundos = $fim_do_mundo - time();

echo date('d/m/Y', $fim_do_mundo);
echo '<br>';
echo 'Faltam ' . number_format($fim_do_mundo_segundos, 0, ',', '.') . ' segundos para o fim do mundo';
echo '<br><hr><br>';
$segundos = $fim_do_mundo_segundos %60;
$minutos = ($fim_do_mundo_segundos /60) %60;
$horas = ($fim_do_mundo_segundos /60/60) %24;
$dias = floor ($fim_do_mundo_segundos / (60 * 60 * 24));

echo 'Faltan ' . $dias . ' dias ' . $horas . ' horas ' . $minutos . ' minutos ' . $segundos .  ' segundos para o fim do mundo. ';   