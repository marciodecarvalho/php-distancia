<!DOCTYPE html>
<html>
    <head>
        <title>Formulário</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form action="contato.php" method="post">
            <fieldset>
                <legend> Formulário</legend><p />
            <label for="nome">Nome: </label><input type="text" name="nome" value="" size="49" id="nome" />&nbsp;&nbsp;&nbsp;
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
                <label for="end">Endereço: </label><input type="text" name="end" value="" size="46" id="end" />&nbsp;&nbsp;
            <label for="num">Nº.: </label><input type="text" name="num" value="" size="6" id="num" />&nbsp;
            <label for="comp">Complemento: </label><input type="text" name="comp" value="" size="12" id="comp" /><br /><br />
            <label for="bairro">Bairro: </label><input type="text" name="bairro" value="" size="20" id="bairro" />&nbsp;
            <label for="cidade">Cidade: </label><input type="text" name="cidade" value="" size="20" id="cidade" />&nbsp;
            <label for="uf">UF: </label><input type="text" name="uf" value="" size="2" id="uf" />&nbsp;
            <label for="cep">CEP: </label><input type="text" name="cep" value="" size="21" id="cep" /><p />
            <label for="email">Email:&nbsp;&nbsp;</label><input type="text" name="email" value="" size="50" id="email"  /><br /><br />
            <input type="checkbox" name="redes" value="nome" id="redes" /> <label for="redes">Redes </label><br />
            <input type="checkbox" name="informatica" value="opcao1" id="informática" /> <label for="informática">Informática </label><br />
            <input type="checkbox" name="programacap" value="opcao2" id="programação" /> <label for="programação">Programação </label><br />
            <input type="checkbox" name="ap_ios" value="opcao2" id="ap_ios" /> <label for="ap_ios">Aplicativos para IOS </label> <br />
            <input type="checkbox" name="eng_soft" value="opcao1" id="eng_soft" /> <label for="eng_soft">Engenharia de Software </label><br />
            <input type="checkbox" name="ap_android" value="opcao3" id="ap_android" /> <label for="ap_android"> Aplicativos para Android </label><p />
            Mensagem: <br />
            <textarea name="mensagem" cols="30" rows="5" ><?php  if(isset($mensagem)){echo $mensagem; } ?></textarea><br />        
                         
                    <input type="hidden" name=" " /><br />
            Enviar: <input type="submit" name="" id="enviar" /><br />
            </fieldset>
        </form>
    </body>
</html>

