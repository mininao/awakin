<template>
    <div class="productlsit">
        <div class="product" v-for="order in reverse(orders)" v-if="!(order.status == 'recovered')">
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

import Firebase from 'firebase';

let config = {
    apiKey: "AIzaSyCf0N-I_sffDX3uJaNfVj0Or1qhTDzw6Cw",
    authDomain: "awakin-162908.firebaseapp.com",
    databaseURL: "https://awakin-162908.firebaseio.com",
    projectId: "awakin-162908",
    storageBucket: "awakin-162908.appspot.com",
    messagingSenderId: "463458707052"
}

let app = Firebase.initializeApp(config);
let db = app.database();
let orderRef = db.ref('orders');

export default {
    name: 'orderlist',
    firebase: {
        orders: orderRef.orderByChild('created_at')
    },
    methods: {
        updateStatus: function(order, newStatus){
            orderRef.child(order['.key']).child('status').set(newStatus);
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

<style lang="css">
</style>
