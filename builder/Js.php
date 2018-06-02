<?php

function jsOutput($icons)
{
    return 'var icons = ' . json_encode($icons) . ';
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
