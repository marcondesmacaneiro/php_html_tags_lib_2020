<?php
interface InterfaceTagMeta {
    
    /**
     * Usada para setar as tags meta.
     * @param string $sTagMeta
     */
    public function setMetaTag($sTagMeta);
    
    /**
     * Usada para retornar todas as tags meta.
     */
    public function getMetaTag();
    
}