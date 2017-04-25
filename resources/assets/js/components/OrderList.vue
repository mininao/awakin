<template>
    <table id="orderlist">
        <thead>
            <tr>
                <th>
                    Property 1
                </th>
                <th>
                    Property 2
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="order in orders">
                <td>
                    {{order.id}}
                </td>
                <td>
                    {{order.name}}
                </td>
                <td>
                    {{order.age}}
                </td>
            </tr>
        </tbody>
    </table>
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
        orders: orderRef
    }
}
</script>

<style lang="css">
</style>
