<?php
/**
 * Arquivo para carregar as classes necessárias.
 * @since 10/03/2020
 */

spl_autoload_register('loadMesmoNivel');

function loadMesmoNivel($sNomeClasse) {
    $sExt     = '.php';
    $sCaminho = $sNomeClasse.$sExt;
    if(file_exists($sCaminho)) {
        require_once $sCaminho;
    }
}