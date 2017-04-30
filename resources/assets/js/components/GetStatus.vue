<template>

    <div class="row justify-content-around text-center order-status">
        <div class="status-icon">
            <i class="ion-ios-checkmark-circle-outline"></i> <p>Reçue</p>
        </div>
        <div class="status-icon" v-bind:class="[{ 'status-icon--inactive': order.status == 'received' }]">
            <i class="ion-ios-checkmark-circle-outline"></i> <p>En préparation</p>
        </div>
        <div class="status-icon" v-bind:class="[{ 'status-icon--inactive': (order.status == 'received' || order.status == 'preparing') }]">
            <i class="ion-ios-checkmark-circle-outline"></i> <p>Prête</p>
        </div>
        <div class="status-icon" v-bind:class="[{ 'status-icon--inactive': order.status != 'finished' }]">
            <i class="ion-ios-checkmark-circle-outline"></i> <p>Récupérée</p>
        </div>
    </div>
</template>

<script>
import VueFire from 'vuefire';
Vue.use(VueFire);

import firebaseModule from '../firebaseModule';
let ordersRef = firebaseModule.db.ref('orders');

export default {
    created() {
        this.$bindAsObject('order', ordersRef.child(this.orderid));
    }
    props: ['orderid']
}
</script>