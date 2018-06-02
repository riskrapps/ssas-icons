<?php

define('BASEDIR', __DIR__);

require './builder/Js.php';
require './builder/Css.php';
require './builder/Icon.php';
require './builder/Icons.php';
require './builder/Config.php';
require './builder/Iconset.php';

$icons = getIconList();
$config = new Config($icons);
$iconset = new Iconset($config);

foreach ($icons as $iconName) {
    $iconset->addIcon(new Icon($iconName));
}

file_put_contents('dist/iconset.css', $iconset->toCss());
file_put_contents('icons.js', jsOutput($icons));
