<?php

class Form {

    private $aLista = array();

    public function addForm($sAtributo) {
        $this->aLista[] = $sAtributo;
    }

    public function criaForm($sAction,$sMethod,$sClass) {
        $sForm = '<form action="'.$sAction.'" method="'.$sMethod.'" class="'.$sClass.'">';
        foreach ($this->aLista as $sItemLista) {
            $sForm .= $sItemLista;
        }
        $sForm .= '</form>';
        return $sForm;
    }
}