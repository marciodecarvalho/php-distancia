<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>e</title>
    </head>
    <body>
        <form>
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
        </form>
    </body>
</html>