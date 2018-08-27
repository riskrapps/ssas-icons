<?php

function jsOutput($categorizedIcons, $count)
{
    $data = [
        'icons' => [],
        'count' => $count,
        'date' => date('d.m.Y H:i'),
    ];

    foreach ($categorizedIcons as $category => $icons) {
        $data['icons'][$category] = array_map(function ($icon) {
            return basename($icon, '.png');
        }, $icons);
    }

    return 'var icons = ' . json_encode(array_flatten($data['icons'])) . ";\n"
        . 'var data = ' . json_encode($data) . '
// AMD support
if (typeof define === \'function\' && define.amd) {
    define(function () { return icons; });
// CommonJS and Node.js module support.
} else if (typeof exports !== \'undefined\') {
    // Support Node.js specific `module.exports` (which can be a function)
    if (typeof module !== \'undefined\' && module.exports) {
        exports = module.exports = icons;
    }
    // But always support CommonJS module 1.1.1 spec (`exports` cannot be a function)
    exports.icons = icons;
}';
}
