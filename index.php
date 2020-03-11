<?php
include "autoload.php";

$link = new A("http://google.com.br", "_blank", "abre o google em uma nova aba", "Acesse o Google Aqui");
$img = new Img("img/img.png", "uma imagem joia", "300", "300");
$footer = new Footer("Aqui vai o texto do footer");

echo $link;
echo $img;
echo $footer;