<?php

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';

$nav = new Nav('id_text', 'class_teste');
$nav->addElementNav('<ul><li>teste</li></ul>');

echo $script->getScript();

include "autoload.php";

