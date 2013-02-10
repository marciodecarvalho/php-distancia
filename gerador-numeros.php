<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
/*
if(isset($_GET['minimo'])){
    $minimo = $_GET['minimo'];
}else{
   $minimo = 1;
}
if(isset($_GET['maximo'])){
    $maximo = $_GET['maximo'];
}else{
  $maximo = 10;
}
if(isset($_GET['minimo'])){
    $quantidade = $_GET['quantidade'];
}else{
  $quantidade = 10;
}
for($i = 0; $i < $quantidade; $i++){
    echo mt_rand($minimo, $maximo) . ' ';
}
*/

if(isset($_GET['minimo']) && isset($_GET['maximo']) && isset($_GET['quantidade'])){
    echo '<a href="gerador-numeros.php">Voltar</a><br />' ;
    
    $minimo = $_GET['minimo'];
    $maximo = $_GET['maximo'];
    $quantidade = $_GET['quantidade'];
    
    for($i = 0; $i < $quantidade; $i++){
    echo mt_rand($minimo, $maximo) . ' ';
    }
}else{
?>
<a href="gerador-numeros.php?minimo=10&maximo=19&quantidade=300">Gerar Números de 10 à 19</a><br />
<a href="gerador-numeros.php?minimo=20&maximo=29&quantidade=300">Gerar Números de 20 à 29</a><br />
<a href="gerador-numeros.php?minimo=10&maximo=99&quantidade=300">Gerar Números de 10 à 99</a><br />
<?php
}
?>