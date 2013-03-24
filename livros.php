<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'servidor_i.php';

// Insert into
/*
$titulo ='Aprendendo PHP';
$autor = 'Marcio José de Carvalho';
$preco = '22.90';
$paginas = '35';
$categoria = 'Desenvolvimento';
consulta_dados("insert into livros (titulo, autor, preco, paginas, categoria) 
    value ('$titulo', '$autor' , $preco, $paginas, '$categoria')");
*/


// update
/*
consulta_dados("update livros set = 'PHP para iniciantes' where id = 5");
*/


//Delete
/*
consulta_dados("delete from livros where id= 9 ");
*/


$livros_query = consulta_dados("
    select 
        livros.titulo, 
        livros.categoria, 
        livros.preco, 
        livros.paginas, 
        autores.nome as Autor
    from 
        livros, 
        autores
    where
        livros.autor_id = autores.id
");
while($livros = mysqli_fetch_assoc($livros_query)) {
    echo '<pre>';
    print_r($livros);
    echo '<pre>';
}
