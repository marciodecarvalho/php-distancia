<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
// é usado o date() para obter a data atual
$data_atual = date("d/m/Y G:i:s");

// é usado o time() para obter o timestamp para a data atual
$data_timestamp = time("d/m/Y G:i:s");

// no print abaixo é colocado a data atual e o timestamp relacionado
print <<< HERE
A data atual é: $data_atual
<br>
Em timestamp é: $data_timestamp
<br>
HERE;

// aqui temos um timestamp já criado
$timestamp_converte="1175175841";

// criamos $nova_data para converter esse timestamp para data atual
$nova_data=date("d/m/Y G:i:s", $timestamp_converte);

// escrevo essa nova data
echo $nova;
?>
