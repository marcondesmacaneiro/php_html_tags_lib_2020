<?php
require_once 'autoload.php';

// Monta o html.
$oHtml = new Html();
$sHtml = $oHtml->getHtml();

// Monta o titulo.
$oTitulo = new Titulo();
$oTitulo->setTitulo('Bem vindo!');
$oTitulo->setStyle('font-weight', 'bold');

// Monta as tags meta.
$oMeta = new Meta();
$oMeta->criaTagMeta('name', 'author', 'content', 'Lucas Valente');

// Monta as tags span.
$oSpan = new Span();
$oSpan->setSpan('Teste 01');
$oSpan->setSpan('Teste 02');
$oSpan->setSpan('Teste 03');
$oSpan->setStyle('color', 'red');

// Monta a div e põe o span como conteúdo.
$oDiv = new Div();
$oDiv->setStyle('background-color', 'black');
$oDiv->setStyle('width', '50%');
$oDiv->setStyle('margin-left', '25%');
$oDiv->setConteudoDiv($oSpan->getSpan());

$sHtml = str_replace('%title', $oTitulo->getTitulo()             , $sHtml);
$sHtml = str_replace('%meta' , implode('', $oMeta->getMetaTag()) , $sHtml);
$sHtml = str_replace('%div'  , $oDiv->getDiv()                   , $sHtml);

echo $sHtml;