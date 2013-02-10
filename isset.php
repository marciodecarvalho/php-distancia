<?php

// Verifica se a variável $_POST não é vazia...
// ou seja: houve um submit no formulário
if (!empty($_POST)) {

    // Verifica se a variável $_POST['nome'] existe
    if (isset($_POST['nome']) {

        // Verifica se o usuário digitou o seu nome
        if (!empty($_POST['nome'])) {
            $nome = $_POST['nome'];
            echo 'Seja bem-vindo(a) ' . $nome . '!';
        } else {
            echo "Por favor, preencha o seu nome";
        }
    } else {
        echo "O campo 'nome' não existe na variável $_POST";
    }
} else {
    echo "Não houve submit no formulário";
}
?>