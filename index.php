<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'form.class.php';
    require_once 'input.class.php';

    $sInput= new Input('text','nome','nome','Digite seu nome...');


    $sForm = new Form();
    $sForm->addForm($sInput->criaInput());
    echo $sForm->criaForm('index.php','GET','form');
    ?>
    
</body>
</html>