<?php
require_once 'interface_tag.php';
/**
 * Classe para o elemento Title.
 */
class Titulo implements InterfaceTag {
    
    private $titulo;
    private $arrayStyle = [];
    
    private function getArrayStyle() {
        return $this->arrayStyle;
    }
    
    public function getTitulo() {
        $sStyle = '';
        if(count($this->getArrayStyle())) {
            foreach($this->getArrayStyle() as $oEstilo) {
                $sStyle .= "{$oEstilo['atributo']}: {$oEstilo['valor']};";
            }
            
            $this->titulo = str_replace('%style', $sStyle, $this->titulo);
        }
        
        return $this->titulo;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setStyle($atributo, $valor) {
        $this->arrayStyle[] = ['atributo' => $atributo, 'valor' => $valor];
    }
    
    public function setTitulo($titulo) {
        $this->titulo = "<title style='%style' >{$titulo}</title>";
    }

}