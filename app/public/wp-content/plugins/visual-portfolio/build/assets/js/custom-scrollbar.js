!function(){"use strict";var t={n:function(o){var n=o&&o.__esModule?function(){return o.default}:function(){return o};return t.d(n,{a:n}),n},d:function(o,n){for(var e in n)t.o(n,e)&&!t.o(o,e)&&Object.defineProperty(o,e,{enumerable:!0,get:n[e]})},o:function(t,o){return Object.prototype.hasOwnProperty.call(t,o)}},o=window.jQuery,n=t.n(o);const{SimpleBar:e,navigator:r}=window,i=n()(document);!/Mac|Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(r.userAgent)&&void 0!==e&&(i.on("extendClass.vpf",((t,o)=>{"vpf"===t.namespace&&(o.prototype.initCustomScrollbar=function(){const t=this;t.emitEvent("beforeInitCustomScrollbar"),t.$items_wrap.find(".vp-portfolio__custom-scrollbar").each((function(){e.instances.get(this)||new e(this)})),t.emitEvent("initCustomScrollbar")},o.prototype.destroyCustomScrollbar=function(){this.$items_wrap.find('[data-simplebar="init"].vp-portfolio__custom-scrollbar').each((function(){const t=e.instances.get(this);t&&t.unMount()})),this.emitEvent("destroyCustomScrollbar")})})),i.on("addItems.vpf",((t,o,n,e)=>{"vpf"===t.namespace&&(e&&o.destroyCustomScrollbar(),o.initCustomScrollbar())})),i.on("init.vpf",((t,o)=>{"vpf"===t.namespace&&o.initCustomScrollbar()})),i.on("destroy.vpf",((t,o)=>{"vpf"===t.namespace&&o.destroyCustomScrollbar()})),i.on("initSwiper.vpf",((t,o)=>{"vpf"===t.namespace&&"true"===o.options.sliderLoop&&o.initCustomScrollbar()})),n()((()=>{n()('[data-simplebar="init"].vp-portfolio__custom-scrollbar').each((function(){const t=e.instances.get(this);t&&t.recalculate()}))})))}();