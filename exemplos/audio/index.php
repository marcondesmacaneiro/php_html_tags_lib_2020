<?php
    include "../../autoload.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trab desenvWeb2</title>
</head>
<body>
    <?php

        /** @var Audio $audio */ 
        $audio = new audio('400', '240');
        $audio->addSource('400', 'audio/mp3');
        $audio->addAtributo('controls');
        $audio->setStyle('float', 'right');
        $audio->setStyle('background-color', 'red');
        echo $audio;
    ?>
</body>
</html>