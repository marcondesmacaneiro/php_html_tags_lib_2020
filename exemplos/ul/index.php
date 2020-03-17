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

    $oLi = new Li('itemLista','Esté é um item da lista');
    
    $oUl = new Ul('lista');
    $oUl->addUl($oLi);
      
    echo $oUl;
    ?>

</body>
</html> 