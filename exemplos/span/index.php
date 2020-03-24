<?php
include '../../autoload.php';

$oSpan = new Span();
$oSpan->setSpan('Teste 01');
$oSpan->setSpan('Teste 02');
$oSpan->setSpan('Teste 03');
$oSpan->setStyle('color', 'red');
echo $oSpan;