<?

$date4 = date("d");
$date3 = date("m");
$date2 = date("Y");
$date2 = substr($date2, 0, 4);
echo "Hoje é $date4/$date3/$date2<br>";

$m1 = 31;
$m2 = 30;
$f = 28;
$ano = 365;
if ($date3 >= 01 and $date3 < 02) {
    $ddd = $ano - 31;
    $mes = $m1;
}
if ($date3 >= 02 and $date3 < 03) {
    $ddd = $ano - 59;
    $mes = $f;
}
if ($date3 >= 03 and $date3 < 04) {
    $ddd = $ano - 90;
    $mes = $m1;
}
if ($date3 >= 04 and $date3 < 05) {
    $ddd = $ano - 120;
    $mes = $m2;
}
if ($date3 >= 05 and $date3 < 06) {
    $ddd = $ano - 151;
    $mes = $m1;
}
if ($date3 >= 06 and $date3 < 07) {
    $ddd = $ano - 181;
    $mes = $m2;
}
if ($date3 >= 07 and $date3 < 08) {
    $ddd = $ano - 211;
    $mes = $m1;
}
if ($date3 >= 08 and $date3 < 09) {
    $ddd = $ano - 242;
    $mes = $m1;
}
if ($date3 >= 09 and $date3 < 10) {
    $ddd = $ano - 272;
    $mes = $m2;
}
if ($date3 >= 10 and $date3 < 11) {
    $ddd = $ano - 303;
    $mes = $m1;
}
if ($date3 >= 11 and $date3 < 12) {
    $ddd = $ano - 333;
    $mes = $m2;
}
if ($date3 >= 12 and $date3 < 1) {
    $ddd = $ano - 365;
    $mes = $m1;
}
$julian = $mes - $date4;
$julian = $julian + $ddd - 1;
echo "Faltam $julian dias para terminar o ano";
$dj = $ano - $julian;
echo "<br>Hoje é o $dj dia do ano <br>";
echo " 365 - $julian = $dj";
?>