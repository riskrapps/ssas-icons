<?php

function getIconList()
{
    $iconDir = BASEDIR . '/icons';
    $files = scandir($iconDir);

    $files = array_filter($files, function ($file) {
        return strpos($file, '.png') > 0;
    });

    $icons = array_map(function ($file) {
        return substr($file, 0, strlen($file) - 4);
    }, $files);

    sort($icons);
    return $icons;
}
