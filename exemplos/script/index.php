<?php
require('autoload.php');
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';

$script = new Script('text/javascript');
$script->addElementScript('console.log("teste")');

$nav = new Nav('id_text', 'class_teste');
$nav->addElementNav('<ul><li>teste</li></ul>');

//$link->url = "unidavi.edu.br";

$link = new Link("unidavi.edu.br","Site da Unidavi","_blank","teste");
echo $link;
echo $script->getScript();
echo $nav->getNav();

include "autoload.php";