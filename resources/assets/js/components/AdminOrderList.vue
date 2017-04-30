<template>
    <div class="orderList">
        <h1>Dashboard Préparation Cafet</h1>
        <div class="orderList-grid">
          <div class="orderList-order" v-for="order in orders" v-if="order.status != 'finished'">
              <h1>#{{order.order_id}} - {{ order.created_at | moment }}</h1>
              <div class="orderList-products">
                <div class="orderList-product" v-for="product in order.products">
                    {{product.title}}
                    <span class="orderList-product-quantity" v-if="product.pivot.quantity > 1">
                      x{{product.pivot.quantity}}
                    </span>
                </div>
              </div>
              <div class="orderList-buttonsPlaceholder"></div>
              <div class="orderList-buttons">
                <button v-on:click="updateStatus(order, 'preparing')">
                  <i v-if="order.status == 'preparing'" class="ion-ios-checkmark-circle"></i>
                  <span>En préparation</span>
                </button>
                <button v-on:click="updateStatus(order, 'ready')">
                  <i v-if="order.status == 'ready'" class="ion-ios-checkmark-circle"></i>
                  <span>Prête</span>
                </button>
                <button v-on:click="updateStatus(order, 'finished')">
                  <i v-if="order.status == 'finished'" class="ion-ios-checkmark-circle"></i>
                  <span>Récupérée</span>
                </button>
              </div>
          </div>
        </div>
    </div>
</template>

<script>
import VueFire from 'vuefire';
Vue.use(VueFire);

import firebaseModule from '../firebaseModule';
let ordersRef = firebaseModule.db.ref('orders');
export default {
  firebase: {
      orders: ordersRef.orderByChild('created_at');
  },
  methods: {
      updateStatus: function(order, newStatus){
        axios.post('/admin/updateorder', {
          order:order.id,
          status:newStatus
        });
      }
  },
  filters: {
      moment: function(date){
          return moment(date).add(2,'hours').locale('fr').fromNow();
      }
  }
}
</script>