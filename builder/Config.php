<?php

class Config
{
    // Target icon width
    public $iconWidth = 50;
    // Target icon height
    public $iconHeight = 50;

    public $iconsetWidth;
    public $iconsetHeight;

    public function __construct(array $icons)
    {
        $this->iconsetWidth = $this->iconWidth;
        $this->iconsetHeight = count($icons) * $this->iconHeight;
    }
}
