<?php
class Img {

    public function __construct($src, $alt, $height, $width) {
        $this->src = $src;
        $this->alt = $alt;
        $this->height = $height;
        $this->width = $width;
    }

    public function __toString() {
        return "<img src=\"{$this->src}\" alt=\"{$this->alt}\" height=\"{$this->height}\" width=\"{$this->width}\"></img>";
    }

}
