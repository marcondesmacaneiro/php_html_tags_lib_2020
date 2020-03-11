<?php
class A {

    public function __construct($url, $target, $title, $text) {
        $this->url = $url;
        $this->target = $target;
        $this->title = $title;
        $this->text = $text;
    }

    public function __toString() {
        return "<a href=\"{$this->url}\" target=\"{$this->target}\" title=\"{$this->title}\">{$this->text}</a>";
    }

}
