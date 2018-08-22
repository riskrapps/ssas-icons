<?php

class Config
{
    // Target icon width
    public $iconWidth = 50;
    // Target icon height
    public $iconHeight = 50;

    public $iconsetWidth;
    public $iconsetHeight;

    public function __construct($numberOfIcons)
    {
        $this->iconsetWidth = $this->iconWidth;
        $this->iconsetHeight = count($numberOfIcons) * $this->iconHeight;
    }
}
