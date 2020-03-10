<?php

class Ul {
    
    private $aLista = array();

    public function addUl($sAtributo) {
        $this->aLista[] = $sAtributo;
    }

    public function criaUl($sClass) {
        $sUl = '<ul class="'.$sClass.'">';
        foreach ($this->aLista as $sItemLista) {
            $sUl .= $sItemLista;
        }
        $sUl .= '</ul>';
        return $sUl;
    }
}
