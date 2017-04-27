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
import Firebase from 'firebase';

let db = Firebase.initializeApp({
    apiKey: "AIzaSyCf0N-I_sffDX3uJaNfVj0Or1qhTDzw6Cw",
    authDomain: "awakin-162908.firebaseapp.com",
    databaseURL: "https://awakin-162908.firebaseio.com",
    projectId: "awakin-162908",
    storageBucket: "awakin-162908.appspot.com",
    messagingSenderId: "463458707052"
}).database();
var orderRef = db.ref('orders');
Vue.use(VueFire);

export default {
  firebase: {
      orders: orderRef.orderByChild('created_at')
  },
  methods: {
      updateStatus: function(order, newStatus){
          //orderRef.child(order['.key']).child('status').set(newStatus);
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