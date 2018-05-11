var icons = ["positive","negative","male","female","disabled","water-handwash","water-drinking","empty-triangle","question-mark","rural","semi-urban","urban","remote","secured","partly-secured","unsecured","stable","unstable","safe","unsafe","fire-hi","fire-mid","flood-hi","flood-mid","flood-lo","wind-hi","wind-mid","wind-lo","earthquake-hi","earthquake-mid","earthquake-lo","landslide-hi","landslide-mid","landslide-lo","tech-hi","tech-mid","tech-lo","social-hi","social-mid","social-lo","health-hi","health-mid","health-lo","drought-hi","drought-mid","drought-lo","extreme-cold-hi","extreme-cold-mid","extreme-cold-lo","religious","private","public","day","semi-residential","residential","fire","wind","flood","earthquake","landslide","health","tech","social","drought","infestation","extreme-heat","extreme-cold","uxo","wall-concrete","wall-masonry","wall-adobe","wall-bamboo","wall-wood","wall-brick","roof-tile","roof-corrugated","roof-straw","roof-bamboo","roof-concrete","roof-mud","roof-wood","sad","neutral","happy","fire-hi","fire-mid","fire-lo","warning-hi","warning-mid","warning-lo","accessibility-hi","accessibility-mid","accessibility-lo","firesafety-hi","firesafety-mid","firesafety-lo","playground-hi","playground-mid","playground-lo","electricity-hi","electricity-mid","electricity-lo","lighting-hi","lighting-mid","lighting-lo","internet-hi","internet-mid","internet-lo","firstaid-hi","firstaid-mid","firstaid-lo","potential-hi","potential-mid","potential-lo","fan-hi","fan-mid","fan-lo","radio-hi","radio-mid","radio-lo","uxo-hi","uxo-mid","uxo-lo","boat-aground","boat-docked","boat-shore","community","faith","fan","radio","road-unpaved","road-footpath","road-paved","road-traffic","very-remote","water-noaccess","water-access","dangerous","tsunami-hi","tsunami-mid","tsunami-lo","tsunami"];
// AMD support
if (typeof define === 'function' && define.amd) {
    define(function () { return icons; });
// CommonJS and Node.js module support.
} else if (typeof exports !== 'undefined') {
    // Support Node.js specific `module.exports` (which can be a function)
    if (typeof module !== 'undefined' && module.exports) {
        exports = module.exports = icons;
    }
    // But always support CommonJS module 1.1.1 spec (`exports` cannot be a function)
    exports.icons = icons;
}