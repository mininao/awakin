<template>
      <h1>{{order.status}}</h1>
</template>

<script>
import VueFire from 'vuefire';
Vue.use(VueFire);

import firebaseModule from '../firebaseModule';
let orderRef = firebaseModule.orderRef.ref('orders');
export default {
    created() {
        this.$bindAsObject('order', orderRef.child(this.orderid))
    },
  firebase: {
      orders: orderRef
  },
    props: ['orderid']
}
