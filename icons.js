var icons = ["entrance-other","safe-access","unsafe-access","permanent","semi-permanent","traditional","fenced","unfenced","avalanche-hi","avalanche-lo","avalanche-mid","avalanche","conflict-hi","conflict-lo","conflict-mid","conflict","drought-black","drought-hi","drought-lo","drought-mid","drought","earthquake-black","earthquake-hi","earthquake-lo","earthquake-mid","earthquake","extreme-climate-black","extreme-climate-hi","extreme-climate-lo","extreme-climate-mid","extreme-climate","extreme-cold-hi","extreme-cold-lo","extreme-cold-mid","extreme-cold","extreme-danger-black","extreme-danger-hi","extreme-danger-lo","extreme-danger-mid","extreme-danger","extreme-heat","fire-black","fire-hi","fire-lo","fire-mid","fire","flood-black","flood-hi","flood-lo","flood-mid","flood","health-black","health-hi","health-lo","health-mid","health","infestation-hi","infestation-lo","infestation-mid","infestation","landslide-black","landslide-hi","landslide-lo","landslide-mid","landslide","safety-black","safety-hi","safety-lo","safety-mid","safety","social-black","social-hi","social-lo","social-mid","social","tech-black","tech-hi","tech-lo","tech-mid","tech","tsunami-black","tsunami-hi","tsunami-lo","tsunami-mid","tsunami","unsafe-access-black","unsafe-access-hi","unsafe-access-lo","unsafe-access-mid","unsafe-access-white","uxo-black","uxo-hi","uxo-lo","uxo-mid","uxo","volcano-black","volcano-hi","volcano-lo","volcano-mid","volcano","wind-black","wind-hi","wind-lo","wind-mid","wind","arrow-down-red","arrow-up-green","black-x","camera-photograph","caution-hazard-red","caution-hazard","dangerous","disabled","empty-triangle","equals-yellow","female","gender-neutral","happy-solid-white","happy-white","happy","male","men-and-women","men","negative","neutral-solid-white","neutral-white","neutral","positive","potential-hi","potential-lo","potential-mid","question-mark","sad-solid-white","sad-white","sad","women","road-footpath","road-paved","road-track","road-traffic","road-unpaved","roof-bamboo","roof-colorbond","roof-concrete","roof-corrugated-metal","roof-corrugated","roof-mud","roof-none","roof-palm-fronds","roof-straw","roof-tarpaulin","roof-tile","roof-wood","community","faith","private","public","religious","day-boarding","day","full-boarding","residential","semi-residential","unregistered-boarding","accessibility-hi","accessibility-lo","accessibility-mid","electricity-hi","electricity-lo","electricity-mid","fan-hi","fan-lo","fan-mid","fan","firesafety-hi","firesafety-lo","firesafety-mid","firstaid-hi","firstaid-lo","firstaid-mid","internet-hi","internet-lo","internet-mid","lighting-hi","lighting-lo","lighting-mid","playground-hi","playground-lo","playground-mid","radio-hi","radio-lo","radio-mid","radio","warning-hi","warning-lo","warning-mid","water-drinking","water-handwash","partly-secured","secured","unsecured","stable","unstable","remote","rural","semi-urban","urban","very-remote","steel","timber-frame","wall-adobe","wall-bamboo","wall-brick","wall-colorbond","wall-composite","wall-concrete-block","wall-concrete","wall-corrugated-metal","wall-masonry","wall-mixed","wall-none","wall-plyboard","wall-weatherboard","wall-wood","boat-aground","boat-docked","boat-shore","wading","water-access","water-noaccess"];
var data = {"icons":{"access":["entrance-other","safe-access","unsafe-access"],"building types":["permanent","semi-permanent","traditional"],"fence":["fenced","unfenced"],"hazards":["avalanche-hi","avalanche-lo","avalanche-mid","avalanche","conflict-hi","conflict-lo","conflict-mid","conflict","drought-black","drought-hi","drought-lo","drought-mid","drought","earthquake-black","earthquake-hi","earthquake-lo","earthquake-mid","earthquake","extreme-climate-black","extreme-climate-hi","extreme-climate-lo","extreme-climate-mid","extreme-climate","extreme-cold-hi","extreme-cold-lo","extreme-cold-mid","extreme-cold","extreme-danger-black","extreme-danger-hi","extreme-danger-lo","extreme-danger-mid","extreme-danger","extreme-heat","fire-black","fire-hi","fire-lo","fire-mid","fire","flood-black","flood-hi","flood-lo","flood-mid","flood","health-black","health-hi","health-lo","health-mid","health","infestation-hi","infestation-lo","infestation-mid","infestation","landslide-black","landslide-hi","landslide-lo","landslide-mid","landslide","safety-black","safety-hi","safety-lo","safety-mid","safety","social-black","social-hi","social-lo","social-mid","social","tech-black","tech-hi","tech-lo","tech-mid","tech","tsunami-black","tsunami-hi","tsunami-lo","tsunami-mid","tsunami","unsafe-access-black","unsafe-access-hi","unsafe-access-lo","unsafe-access-mid","unsafe-access-white","uxo-black","uxo-hi","uxo-lo","uxo-mid","uxo","volcano-black","volcano-hi","volcano-lo","volcano-mid","volcano","wind-black","wind-hi","wind-lo","wind-mid","wind"],"misc":["arrow-down-red","arrow-up-green","black-x","camera-photograph","caution-hazard-red","caution-hazard","dangerous","disabled","empty-triangle","equals-yellow","female","gender-neutral","happy-solid-white","happy-white","happy","male","men-and-women","men","negative","neutral-solid-white","neutral-white","neutral","positive","potential-hi","potential-lo","potential-mid","question-mark","sad-solid-white","sad-white","sad","women"],"roads":["road-footpath","road-paved","road-track","road-traffic","road-unpaved"],"roofs":["roof-bamboo","roof-colorbond","roof-concrete","roof-corrugated-metal","roof-corrugated","roof-mud","roof-none","roof-palm-fronds","roof-straw","roof-tarpaulin","roof-tile","roof-wood"],"school-governace":["community","faith","private","public","religious"],"school-types":["day-boarding","day","full-boarding","residential","semi-residential","unregistered-boarding"],"services":["accessibility-hi","accessibility-lo","accessibility-mid","electricity-hi","electricity-lo","electricity-mid","fan-hi","fan-lo","fan-mid","fan","firesafety-hi","firesafety-lo","firesafety-mid","firstaid-hi","firstaid-lo","firstaid-mid","internet-hi","internet-lo","internet-mid","lighting-hi","lighting-lo","lighting-mid","playground-hi","playground-lo","playground-mid","radio-hi","radio-lo","radio-mid","radio","warning-hi","warning-lo","warning-mid","water-drinking","water-handwash"],"site-security":["partly-secured","secured","unsecured"],"site-stability":["stable","unstable"],"site-types":["remote","rural","semi-urban","urban","very-remote"],"walls":["steel","timber-frame","wall-adobe","wall-bamboo","wall-brick","wall-colorbond","wall-composite","wall-concrete-block","wall-concrete","wall-corrugated-metal","wall-masonry","wall-mixed","wall-none","wall-plyboard","wall-weatherboard","wall-wood"],"water-access":["boat-aground","boat-docked","boat-shore","wading","water-access","water-noaccess"]},"count":230,"date":"22.12.2023 20:08"}
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