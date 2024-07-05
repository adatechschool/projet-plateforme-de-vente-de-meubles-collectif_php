<template>
    <div class="container mt-5">
      <div class="col-12 ">
        <h2 class="text-center mb-4">Votre Panier</h2>
        <div class="card p-3">
          
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th>Produit</th>
                <th>Quantité</th>
                <th>Prix Unitaire</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(item, index) in cartItems" :key="item.name">
                <td>{{ item.name }}</td>
                <td><input type="number" class="form-control" v-model.number="item.quantity" @change="updateQuantity(index)"></td>
                <td>{{ item.unitPrice.toFixed(2) }}€</td>
                <td>{{ (item.unitPrice * item.quantity).toFixed(2) }}€</td>
                <td><button class="btn btn-danger" @click="removeItem(index)">Supprimer</button></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="3" class="text-right">Total:</th>
                <th>{{ cartTotal }}€</th>
                <th></th>
              </tr>
            </tfoot>
          </table>
          <router-link to="/checkout" class="btn btn-primary btn-block">Passer au paiement</router-link>
        </div>
      </div>
    </div>
  </template>

  <script>
  // import Cart from './Cart.vue';  
  export default {
    name: 'CartPay',
    data() {
      return {
        cartItems: [
          { name: 'Lit', quantity: 3, unitPrice: 1.00 },
          { name: 'Chaise', quantity: 5, unitPrice: 0.50 },
          { name: 'Table', quantity: 2, unitPrice: 1.20 },
          { name: 'Canapé', quantity: 1, unitPrice: 200 },
          { name: 'Canapé lit', quantity: 1, unitPrice: 1020 },
          { name: 'Table basse', quantity: 1, unitPrice: 80 },
          { name: 'Chaise haute', quantity: 4, unitPrice: 50 }
        ]
      };
    },
    computed: {
      cartTotal() {
        return this.cartItems.reduce((total, item) => total + (item.unitPrice * item.quantity), 0).toFixed(2);
      }
    },
    methods: {
      updateQuantity(index) {
        if (this.cartItems[index].quantity <= 0) {
          this.removeItem(index);
        }
      },
      removeItem(index) {
        this.cartItems.splice(index, 1);
      }
    }
  }
  </script>
  
  <style scoped>
  .container {
    margin-top: 50px;
  }
  .card {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  </style>
  