require('./init');


Vue.component('admin-order-list', require('./components/AdminOrderList.vue'));
Vue.component('create-order', require('./components/CreateOrder.vue'));
Vue.component('get-status', require('./components/GetStatus.vue'));

const app = new Vue({
    el: '#app'
});

if(document.getElementById('sideNav-nav')) {
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
}