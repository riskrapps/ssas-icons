<?php

$icons = [
    'water-handwash', 'water-drinking',
    'empty-triangle', 'question-mark',
    'rural', 'semi-urban', 'urban', 'remote',
    'secured', 'partly-secured', 'unsecured',
    'stable', 'unstable',
    'safe', 'unsafe',
    'fire-hi', 'fire-mid',
    'flood-hi', 'flood-mid', 'flood-lo',
    'wind-hi', 'wind-mid', 'wind-lo',
    'earthquake-hi', 'earthquake-mid', 'earthquake-lo',
    'landslide-hi', 'landslide-mid', 'landslide-lo',
    'tech-hi', 'tech-mid', 'tech-lo',
    'social-hi', 'social-mid', 'social-lo',
    'health-hi', 'health-mid', 'health-lo',
    'drought-hi', 'drought-mid', 'drought-lo',
    'extreme-cold-hi', 'extreme-cold-mid', 'extreme-cold-lo',
    'religious', 'private', 'public',
    'day', 'semi-residential', 'residential',
    'fire', 'wind', 'flood', 'earthquake', 'landslide', 'health', 'tech', 'social', 'drought', 'infestation', 'extreme-heat', 'extreme-cold', 'uxo',
    'wall-concrete', 'wall-masonry', 'wall-adobe', 'wall-bamboo', 'wall-wood', 'wall-brick',
    'roof-tile', 'roof-corrugated', 'roof-straw', 'roof-bamboo', 'roof-concrete', 'roof-mud', 'roof-wood',
    'sad', 'neutral', 'happy',
    'fire-hi', 'fire-mid', 'fire-lo',
    'warning-hi', 'warning-mid', 'warning-lo',
    'accessibility-hi', 'accessibility-mid', 'accessibility-lo',
    'firesafety-hi', 'firesafety-mid', 'firesafety-lo',
    'playground-hi', 'playground-mid', 'playground-lo',
    'electricity-hi', 'electricity-mid', 'electricity-lo',
    'lighting-hi', 'lighting-mid', 'lighting-lo',
    'internet-hi', 'internet-mid', 'internet-lo',
    'firstaid-hi', 'firstaid-mid', 'firstaid-lo',
    'potential-hi', 'potential-mid', 'potential-lo',
    'fan-hi', 'fan-mid', 'fan-lo',
    'radio-hi', 'radio-mid', 'radio-lo',
    'uxo-hi', 'uxo-mid', 'uxo-lo',
    'boat-aground', 'boat-docked', 'boat-shore',
    'community', 'faith', 'fan', 'radio',
    'road-unpaved', 'road-footpath', 'road-paved', 'road-traffic',
    'very-remote', 'water-noaccess', 'water-access', 'dangerous',
    'tsunami-hi', 'tsunami-mid', 'tsunami-lo', 'tsunami',
];

$iconWidth = 50;
$iconHeight = 50;
$iconsDir = 'icons/';

$iconsetWidth = $iconWidth;
$iconsetHeight = $iconHeight * count($icons);

$canvas = imagecreatetruecolor(
    $iconWidth,
    $iconHeight * count($icons)
);

imagealphablending($canvas, false);
imagesavealpha($canvas, true);

$css = '';

function addBackgroundRule($image)
{
    global $css;

    $css = '.ssas{'
        . 'display:inline-block;'
        . 'background-image:url(data:image/png;base64,' . base64_encode($image) . ');'
        . '}' . $css;
}

function addIconCss($name, $offset)
{
    global $css,
        $iconWidth,
        $iconHeight,
        $iconsetWidth,
        $iconsetHeight;

    $css .= '.ssas.' . $name . '{'
            . 'width:' . $iconWidth . 'px;'
            . 'height:' . $iconHeight . 'px;'
            . 'background-position: ' . '0px -' . $offset . 'px;'
            . '}';

    $css .= '.ssas.mini.' . $name . '{'
            . 'width:' . ($iconWidth / 2) . 'px;'
            . 'height:' . ($iconHeight / 2) . 'px;'
            . 'background-position: ' . '0px -' . ($offset / 2) . 'px;'
            . '-webkit-background-size:' . ($iconsetWidth / 2) . 'px ' . ($iconsetHeight / 2) . 'px;'
            . 'background-size:' . ($iconsetWidth / 2) . 'px ' . ($iconsetHeight / 2) . 'px;'
            . '}';
}

foreach ($icons as $i => $icon) {
    $file = $iconsDir . $icon . '.png';
    $img = imagecreatefrompng($file);
    imagealphablending($img, false);
    imagesavealpha($img, true);

    $offset = $i * $iconHeight;
    imagecopy($canvas, $img, 0, $offset, 0, 0, $iconWidth, $iconHeight);
    addIconCss($icon, $offset);
}

ob_start();
imagepng($canvas);
$png = ob_get_contents();
ob_end_clean();

addBackgroundRule($png);


file_put_contents('dist/iconset.css', $css);
file_put_contents('icons.js', 'var icons=' . json_encode($icons));
