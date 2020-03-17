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

        /** @var Video $audio */
        $video = new video('400', '240');
        $video->addSource('movie.mp4', 'video/mp4');
        $video->addSource('movie2.mp4', 'video/mp4');
        $video->addAtributo('controls');
        $video->addAtributo('loop');
        $video->setStyle('margin-left', '5px');
        echo $video;
    ?>
</body>
</html>