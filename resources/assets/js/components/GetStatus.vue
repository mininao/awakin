<template>

    <div class="row justify-content-around text-center order-status">
        {{order.status}}
        <div class="status-icon status-icon--received">
            <i class="ion-ios-checkmark-circle-outline"></i> Reçue
        </div>
        <div class="status-icon status-icon--in-progress" v-bind:class="[{ 'status-icon--in-progress--inactive': order.status == 'preparing' }]">
            <i class="ion-ios-checkmark-circle-outline"></i> En Préparation
        </div>
        <div class="status-icon status-icon--in-progress" v-bind:class="[{ 'status-icon--in-progress--inactive': order.status == 'ready' }]">
            <i class="ion-ios-checkmark-circle-outline"></i> Prête
        </div>
        <div class="status-icon status-icon--delivered" v-bind:class="[{ 'status-icon--delivered--inactive': order.status != 'finished' }]">
            <!-- <i class="ion-ios-checkmark-circle-outline"></i>  -->
            Récupérée
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