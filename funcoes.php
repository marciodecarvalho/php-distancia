<?php
header('Content-Type: text/html; charset=utf-8');
function texto_em_negrito($texto) {
    return '<strong>' . $texto . '</strong><br />';
}

echo texto_em_negrito('oi');
echo texto_em_negrito('tudo');
echo texto_em_negrito('bem');
echo texto_em_negrito('com');
echo texto_em_negrito('você?');
