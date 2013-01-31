<?php
header('Content-Type: text/html; charset=utf-8');

echo 'FOR<br>';
for($i = 0; $i < 10; $i++){
    echo 'I é igual a ' . $i . '<br>';
}

echo '<br><hr>FOR<br>';

for($i = 10; $i >= 0; $i--){
    echo 'I é igual a ' . $i . '<br>';
}

echo '<br><hr>WHILE<br>';

$i = 0;

while($i < 10){
    echo 'I é igual a ' . $i . '<br>';
    $i++;
}

echo '<br><hr>DO WHILE<br>';

$i = 0;
do{
    echo 'i é igual a ' . $i . '<br>';
    $i++;
}while($i < 10);

?>
