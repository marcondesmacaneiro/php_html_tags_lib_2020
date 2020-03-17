<?php

class Input {

    private $type;
    private $class;
    private $id;
    
    public function __construct($type, $class, $id) {
        $this->type = $type;
        $this->class = $class;
        $this->id = $id;
    }

    public function criaInput() {
        return '<input type="'.$this->type.'" class="'.$this->class.'" id="'.$this->id.'">';
    }
 }