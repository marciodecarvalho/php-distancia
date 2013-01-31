<?php
header('Content-Type: text/html; charset=utf-8');
$acesso = 1;
echo 'Usuário ';
echo ($acesso > 0) ? ' Registrado' : ' Não Registrado';

echo '<br><hr><br>';

if($acesso == 0){
    echo 'Usuário não Registrado';
}
else{
    echo 'Usuário Registrado';
}