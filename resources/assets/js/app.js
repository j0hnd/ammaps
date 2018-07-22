
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import 'ammap3/ammap/ammap.js';
import 'ammap3/ammap/maps/js/usaLow.js';

window.Vue = require('vue');

// map attributes
window.mapType = process.env.MIX_MAP_TYPE;
window.mapTheme = process.env.MIX_MAP_THEME;
window.color = process.env.MIX_MAP_COLOR;
window.rollOverColor = process.env.MIX_MAP_ROLL_OVER_COLOR;
window.rollOverOutlineColor = process.env.MIX_MAP_ROLL_OVER_OUTLINE_COLOR;
window.selectedColor = process.env.MIX_MAP_SELECTED_COLOR;
window.outlineColor = process.env.MIX_MAP_OUTLINE_COLOR;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });
