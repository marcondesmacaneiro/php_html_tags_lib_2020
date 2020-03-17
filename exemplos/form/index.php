<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include '../../autoload.php';

    $oInput = new Input('text','botao','botao','Digite seu nome...');
      
    $oForm = new Form('index.php','GET','teste');
    $oForm->addForm($oInput);

    echo $oForm;
    ?>

</body>
</html> 