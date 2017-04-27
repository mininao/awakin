<template>
    <div class="productlist">
        <h1>Liste des commandes</h1>
        <div class="product" v-for="order in orders">
            <p>Commande n° {{order['.key']}}</p>
            <ul>
                <li v-for="product in order.products">
                    {{product.name}}
                </li>
            </ul>
            <button v-on:click="updateStatus(order, 'preparing')">En préparation</button>
            <button v-on:click="updateStatus(order, 'ready')">Prête</button>
            <button v-on:click="updateStatus(order, 'recovered')">Récupérée</button>
            <p>{{ order.created_at | moment }}</p>
        </div>
    </div>
</template>

<script>
import VueFire from 'vuefire';
Vue.use(VueFire);

import firebaseModule from '../firebaseModule';
let orderRef = firebaseModule.orderRef.ref('orders');
export default {
  firebase: {
      orders: orderRef.orderByChild('created_at')
  },
  methods: {
      updateStatus: function(order, newStatus){
        //   orderRef.child(order['.key']).child('status').set(newStatus);
      },
      //Firebase ne renvoie pas les commandes par ordre croissante de date
      reverse: function(orders){
          return orders.slice().reverse();
      }
  },
  filters: {
      moment: function(date){
          return moment(date).locale('fr').fromNow();
      }
  }
}
</script>
