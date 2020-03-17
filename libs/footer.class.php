<?php
class Footer {

    public function __construct($text) {

        $this->text = $text;
    }

    public function __toString() {
        return "<footer>{$this->text}</footer>";
    }

}
