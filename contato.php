<?php
$sucesso = false;
if (isset($_POST['nome'])) {
    $aviso = '';
    
    $nome = $_POST['nome'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano= $_POST['ano'];
    $email = $_POST['email'];
    $end = $_POST['end'];
    $num = $_POST['num'];
    $comp = $_POST['comp'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $mensagem = $_POST['mensagem'];
    if(empty($nome)){
        $aviso .= 'Favor preencher o campo Nome.<br />';
    }
    if(empty($email)){
        $aviso .= 'Favor preencher o campo Email.<br />';
    }
    if(empty($end)){
        $aviso .='Favor marcar o campo Endereço.<br />';
    }
    if(empty($aviso)){
        $aviso .= 'Recebemos sua mensagem. Seus dados foram enviados com sucesso.<p />';
        $aviso .= 'Nome: '. $nome .'<br />';
        $aviso .= 'Data Nascimento: ' . $dia . '/' . $mes . '/' . $ano . '<br />';
        $aviso .= 'Endereço: ' . $end . ', ' . $num . ' - ' . $comp . '<br />';
        $aviso .= 'Bairro: ' . $bairro . '<br />';
        $aviso .= 'Cidade: ' . $cidade . '<br />';
        $aviso .= 'Estado: ' . $uf . '<br />';
        $aviso .= 'Cep: ' . $cep . '<br />';
        $aviso .= 'Email: ' . $email . '<br />';
        $aviso .= 'Mensagem: ' . $mensagem . '<br />';
        
        $aviso .= '<br /><br /><a href="contato.php">Voltar</a>';
        $sucesso = TRUE;
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Formulário</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php if(!empty($aviso)): ?>
        <h3><?php print $aviso ; ?></h3>
        <?php endif; ?>
        
        <?php if(!$sucesso): ?>
        <form action="contato.php" method="post">
            <fieldset>
                <legend> Formulário</legend><p />
            <label for="nome">Nome: </label><input type="text" name="nome" value="<?php if(isset($nome)){echo $nome;} ?>" size="49" id="nome"  />&nbsp;&nbsp;&nbsp;
                Data de nascimento &nbsp; 
                    <select name="dia">
                <?php for($i = 1; $i <= 31; $i++): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select>
            /
            <select name="mes">
                <?php for($i = 1; $i <= 12; $i++): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select>
            /
            <select name="ano">
                <?php for($i = 1900; $i <= 2012; $i++): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select>
                <br /><br />
                <label for="end">Endereço: </label><input type="text" name="end" value="<?php if(isset($end)){echo $end;} ?>" size="46" id="end" />&nbsp;&nbsp;
            <label for="num">Nº.: </label><input type="text" name="num" value="<?php if(isset($num)){echo $num;} ?>" size="6" id="num" />&nbsp;
            <label for="comp">Complemento: </label><input type="text" name="comp" value="<?php if(isset($comp)){echo $comp;} ?>" size="12" id="comp" /><br /><br />
            <label for="bairro">Bairro: </label><input type="text" name="bairro" value="<?php if(isset($bairro)){echo $bairro;} ?>" size="20" id="bairro" />&nbsp;
            <label for="cidade">Cidade: </label><input type="text" name="cidade" value="<?php if(isset($cidade)){echo $cidade;} ?>" size="20" id="cidade" />&nbsp;
            <label for="uf">UF: </label><input type="text" name="uf" value="<?php if(isset($uf)){echo $uf;} ?>" size="2" id="uf" />&nbsp;
            <label for="cep">CEP: </label><input type="text" name="cep" value="<?php if(isset($uf)){echo $uf;} ?>" size="21" id="cep" /><p />
            <label for="email">Email:&nbsp;&nbsp;</label><input type="text" name="email" value="<?php if(isset($email)){echo $email;} ?>" size="50" id="email"  /><br /><br />
                Marque os assuntos de seu interesse? <p />
            <input type="checkbox" name="redes" value="nome" id="redes" /> <label for="redes">Redes </label><br />
            <input type="checkbox" name="informatica" value="opcao1" id="informática" /> <label for="informática">Informática </label><br />
            <input type="checkbox" name="programacap" value="opcao2" id="programação" /> <label for="programação">Programação </label><br />
            <input type="checkbox" name="ap_ios" value="opcao2" id="ap_ios" /> <label for="ap_ios">Aplicativos para IOS </label> <br />
            <input type="checkbox" name="eng_soft" value="opcao1" id="eng_soft" /> <label for="eng_soft">Engenharia de Software </label><br />
            <input type="checkbox" name="ap_android" value="opcao3" id="ap_android" /> <label for="ap_android"> Aplicativos para Android </label><p />
            Mensagem: <br />
            <textarea name="mensagem" cols="30" rows="5" value="<?php if(isset($mensagem)){echo $mensagem;} ?>" ><?php  if(isset($mensagem)){echo $mensagem; } ?></textarea><br />      
                    <input type="hidden" name=" " /><br />
            Enviar: <input type="submit" name="" id="enviar" /><br />
            </fieldset>
        </form>
        <?php endif; ?>
    </body>
</html>
