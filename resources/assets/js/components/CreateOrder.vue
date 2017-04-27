<template>
  <div class="col-md-8 col-lg-6">
    <h1>Créer une commande</h1>
    <ul class="nav nav-pills justify-content-around">
        <li role="presentation" class="nav-item active">
            <a href="#boisson"><i class="ion-ios-cafe"></i></a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#sucrerie"><i class="ion-ios-ice-cream"></i></a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#sale"><i class="ion-ios-pizza"></i></a>
        </li>
    </ul>
    
    <div class="tab-content order-tab">
        <div class="tab-pane active" id="boisson" role="tabpanel">
            <table class="table product-table">
                <thead class="order-tab__head justify-content-around">
                    <tr>
                        <th>Produit</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products">
                        <th>{{product.title}}</th>
                        <td class="text-center">{{product.price/100 + " €"}}</td>
                        <td class="text-center">
                            <button v-on:click="product.quantity++" class="order-tab__quantity-button order-tab__quantity-button--active">+</button>
                            <button v-on:click="product.quantity && product.quantity--" class="order-tab__quantity-button order-tab__quantity-button--default">-</button>
                            <span class="order-tab__quantity-number">{{product.quantity}}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane" id="sucrerie" role="tabpanel">pane 2</div>
        <div class="tab-pane" id="sale" role="tabpanel">pane 3</div>
    </div>
    <div class="row justify-content-center">
        <input v-on:click="sendOrder()" type="submit" value="Valider (montant total)">
    </div>
    </div>
</template>

<script>
    export default {
        mounted() {
          axios.get("/student/orders/products")
          .then((response)=>{
            let products = response.data;
            products = products.map((product)=> {
              product.quantity = 0;
              return product;
            });
            this.products = products;
            this.loading = false;
          })
          .catch((error)=>{
            console.error(error);
          });
        },
        data() {
          return {
            loading: true,
            products: []
          }
        },
        computed: {
          orderedProducts() {
            let orderedProducts = {};
            _.filter(this.products,'quantity')
            .map((product)=>orderedProducts[product.id]=_.pick(product,'quantity'));
            
            
            return orderedProducts;
          }
        },
        methods: {
          sendOrder() {
            console.log(this.orderedProducts)
            axios.post('/student/orders', {
              orderedProducts:this.orderedProducts
            })
          }
        }
    }
</script>