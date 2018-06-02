<?php

class Css
{
    private $output;
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function addIcon(Icon $icon, $offset)
    {
        $this->output .= '.ssas.' . $icon->name() . '{'
                . 'width:' . $this->config->iconWidth . 'px;'
                . 'height:' . $this->config->iconHeight . 'px;'
                . 'background-position: ' . '0px -' . $offset . 'px;'
                . '}';

        $this->output .= '.ssas.mini.' . $icon->name() . '{'
                . 'width:' . ($this->config->iconWidth / 2) . 'px;'
                . 'height:' . ($this->config->iconHeight / 2) . 'px;'
                . 'background-position: ' . '0px -' . ($offset / 2) . 'px;'
                . '-webkit-background-size:' . ($this->config->iconsetWidth / 2) . 'px ' . ($this->config->iconsetHeight / 2) . 'px;'
                . 'background-size:' . ($this->config->iconsetWidth / 2) . 'px ' . ($this->config->iconsetHeight / 2) . 'px;'
                . '}';
    }

    public function addBackground($base64Image)
    {
        $this->output = '.ssas{'
        . 'display:inline-block;'
        . 'background-image:url(data:image/png;base64,' . $base64Image . ');'
        . '}' . $this->output;
    }

    public function output()
    {
        return $this->output;
    }
}
