<template>

    <div class="row justify-content-around text-center order-status">
        <!-- {{order.status}} -->
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
let orderRef = firebaseModule.orderRef.ref('orders');

export default {
    created() {
        // id à changer, mettre this.orderid
        this.$bindAsObject('order', orderRef.child(this.orderid));
    },
    firebase: {
        orders: orderRef
    },
    props: ['orderid']
}
</script>