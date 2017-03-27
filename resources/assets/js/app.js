
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

// var slideout = new Slideout({
//   'panel': document.getElementById('mainContent'),
//   'menu': document.getElementById('sideNav'),
//   'padding': 256,
//   'tolerance': 70
// });
// window.slideout = slideout;