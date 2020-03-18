<?php
require_once 'interface_tag_meta.php';
class Meta implements InterfaceTagMeta {
    
    private $metaTag = [];
    
    private function getTag() {
        return '<meta %conteudo />';
    }
    
    /**
     * {@inheritdoc}
     */
    public function getMetaTag() {
        return $this->metaTag;
    }

    /**
     * {@inheritdoc}
     */
    public function setMetaTag($sTagMeta) {
        $this->metaTag[] = $sTagMeta;
    }
    
    /**
     * Cria a tag meta.
     * @param string $sAtributo
     * @param string $sValor
     * @param string $sContent
     * @param string $sValorContent
     */
    public function criaTagMeta($sAtributo = '', $sValor = '', $sContent = 'content', $sValorContent = '') {
        $sTag = str_replace('%conteudo', "{$sAtributo}='{$sValor}' {$sContent}='{$sValorContent}'", $this->getTag());
        $this->setMetaTag($sTag);
    }

}