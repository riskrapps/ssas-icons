<?php

define('BASEDIR', __DIR__);

require './builder/Js.php';
require './builder/Css.php';
require './builder/Icon.php';
require './builder/Icons.php';
require './builder/Config.php';
require './builder/Iconset.php';
require './builder/Helpers.php';

$categorizedIcons = getIconList();
$allIcons = array_flatten($categorizedIcons);

$iconsCount = count($allIcons);

$iconset = new Iconset(
    new Config($iconsCount)
);

foreach ($allIcons as $file) {
    $iconset->addIcon(new Icon($file));
}

// Enable this line to test the png output
// $iconset->toPng('output.png');

file_put_contents('dist/iconset.css', $iconset->toCss());
file_put_contents('icons.js', jsOutput(
    $categorizedIcons,
    $iconsCount
));
