
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueFire from 'vuefire';
import OrderList from './components/OrderList.vue';

Vue.use(VueFire);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//
// Vue.component('example', require('./components/Example.vue'));

Vue.component('orderlist', require('./components/OrderList.vue'));

// new Vue({
//     el: '#app'
// });

var orderlist = new Vue({
    el: '#orderlist'
});

var slideout = new Slideout({
  'panel': document.getElementById('sideNav-content'),
  'menu': document.getElementById('sideNav-nav'),
  'padding': 256,
  'tolerance': 70
});
document.querySelector('.sideNav-toggle').addEventListener('click', function() {
  slideout.toggle();
});
window.slideout = slideout;