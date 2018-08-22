<?php
class Iconset
{
    private $css;
    private $index;
    private $config;
    private $canvas;

    public function __construct(Config $config)
    {
        $this->index = 0;
        $this->config = $config;
        $this->css = new Css($config);

        $this->createCanvas();
    }

    private function createCanvas()
    {
        $this->canvas = imagecreatetruecolor(
            $this->config->iconsetWidth,
            $this->config->iconsetHeight
        );
        imagealphablending($this->canvas, false);
        imagesavealpha($this->canvas, true);
    }

    public function addIcon(Icon $icon)
    {
        $image = $icon->getImage(
            $this->config->iconWidth,
            $this->config->iconHeight
        );

        $offset = $this->index * $this->config->iconHeight;

        imagecopy($this->canvas, $image, 0, $offset, 0, 0, $this->config->iconWidth, $this->config->iconHeight);
        $this->css->addIcon($icon, 0);
        $this->index++;
    }

    private function toBase64()
    {
        ob_start();
        imagepng($this->canvas);
        $png = ob_get_contents();
        ob_end_clean();
        return base64_encode($png);
    }

    public function toCss()
    {
        $this->css->addBackground($this->toBase64());
        return $this->css->output();
    }
}
