<?php

// Recebe um campo de um formulário
$nome = $_POST['nome'];


// Verifica se o usuário digitou o seu nome
if (empty($nome)) {
	echo "Por favor, preencha o seu nome.";
}

?>
