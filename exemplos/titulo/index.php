<?php
include '../../autoload.php';

// Monta o html
$oHtml = new Html();
$sHtml = $oHtml->getHtml();

// Monta o titulo.
$oTitulo = new Titulo();
$oTitulo->setTitulo('Bem vindo!');
$oTitulo->setStyle('font-weight', 'bold');

// Monta as tags meta.
$oMeta = new Meta();
$oMeta->criaTagMeta('name', 'author', 'content', 'Lucas Valente');

$sHtml = str_replace('%title', $oTitulo->getTitulo()             , $sHtml);
$sHtml = str_replace('%meta' , implode('', $oMeta->getMetaTag()) , $sHtml);

echo $sHtml;