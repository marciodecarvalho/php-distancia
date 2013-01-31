<!DOCTYPE html>

 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Fomulário</title>
 </head>
 <body>
    <form>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    
<fieldset>
<legend>Orcamento</legend></p>
<fieldset id="dp1">
<legend>Dados do Cliente</legend>
	<label for="nome">Nome completo:</label>
	<input name="nome" type="text" id="nome" />
        
        <label for="nome">Data de Nascimento:</label>
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
                <?php for($i = 2012; $i >= 1900; $i--): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select></br></br>

	<label for="tel">Telefone:</label>
	<input name="tel" type="text" id="tel" />

	<label for="rua">End. Completo:</label>
	<input type="text" name="end" id="end" />

	<label for="email">E-mail:</label>
	<input type="text" name="email" id="email" />	
	
</fieldset></p>
<fieldset id="dp2">
<legend>Localizacao da Festa</legend>
	<label for="local">Local da Festa:</label>
	<input name="local" type="text" id="local" />

	<label for="bairro">Bairro:</label>
	<input name="bairro" type="text" id="bairro" />

	<label for="cid">Cidade:</label>
	<input name="cid" type="text" id="cid" /></br>

	<label for="est">Estado:</label>
	<input name="est" type="text" id="est" /></br>

	<label for="npessoal">N de Pessoas:</label>
	<input name="npessoal" type="text" id="npessoal" />

	<label for="data">Data do Evento:</label>
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
                <?php for($i = 2020; $i >= 2012; $i--): ?>
                    <option value="<?php print $i; ?>"><?php print $i; ?></option>
                <?php endfor; ?>
            </select></br>


	<label for="evento">Evento:</label>
<select id="evento" name="evento">
		<option selected="selected">15 Anos</option>
	<optgroup label="Eventos">
		<option>Buffet</option>
		<option>Casamento</option>
		<option>Aniversario Inf.</option>
		<option>Churrasco</option>
		<option>Outros</option>
	</optgroup>
</select>
	<label for="contrato">Tipo de Serviço:</label>
<select id="contrato" name="contrato">
		<option selected="selected">Ornamentação</option>
	<optgroup label="Serviços">
		<option>Ornamentação</option>
		<option>Buffet</option>
		<option>Outros</option>
	</optgroup>

</select>
</fieldset></p>
<fieldset id="com">
<legend>Comentarios</legend>
	<label for="mensagem">Mensagem:</label>
	<textarea id="mensagem" name="mensagem" rows="6" cols="28"></textarea>
</fieldset></p></br>
		
<p><input type="submit" value="Enviar" id="enviar" />
<input type="reset" value="Limpar" id="limpar" /></p>
    </form>
</body>