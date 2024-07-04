<template>
  <div class="container d-flex justify-content-center align-items-center vh-80">
    <div class="col-md-12">
      <h2 class="text-center mb-4">Page de Checkout</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h4>Informations de facturation</h4>
              <form>
                <div class="form-group">
                  <label for="fullName">Nom complet</label>
                  <input
                    type="text"
                    class="form-control"
                    id="fullName"
                    placeholder="Entrez votre nom complet"
                    v-model="billing.fullName"
                  />
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Entrez votre email"
                    v-model="billing.email"
                  />
                </div>
                <div class="form-group">
                  <label for="address">Adresse</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address"
                    placeholder="Entrez votre adresse"
                    v-model="billing.address"
                  />
                </div>
                <div class="form-group">
                  <label for="city">Ville</label>
                  <input
                    type="text"
                    class="form-control"
                    id="city"
                    placeholder="Entrez votre ville"
                    v-model="billing.city"
                  />
                </div>
                <div class="form-group">
                  <label for="postalCode">Code postal</label>
                  <input
                    type="text"
                    class="form-control"
                    id="postalCode"
                    placeholder="Entrez votre code postal"
                    v-model="billing.postalCode"
                  />
                </div>
                <div class="form-group">
                  <label for="country">Pays</label>
                  <input
                    type="text"
                    class="form-control"
                    id="country"
                    placeholder="Entrez votre pays"
                    v-model="billing.country"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h4>Informations de paiement</h4>
              <form>
                <div class="form-group">
                  <label for="cardName">Nom sur la carte</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cardName"
                    placeholder="Entrez le nom sur la carte"
                    v-model="payment.cardName"
                  />
                </div>
                <div class="form-group">
                  <label for="cardNumber">Numéro de carte</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cardNumber"
                    placeholder="Entrez le numéro de carte"
                    v-model="payment.cardNumber"
                  />
                </div>
                <div class="form-group">
                  <label for="expiryDate">Date d'expiration</label>
                  <input
                    type="text"
                    class="form-control"
                    id="expiryDate"
                    placeholder="MM/AA"
                    v-model="payment.expiryDate"
                  />
                </div>
                <div class="form-group">
                  <label for="cvv">CVV</label>
                  <input
                    type="text"
                    class="form-control"
                    id="cvv"
                    placeholder="Entrez le CVV"
                    v-model="payment.cvv"
                  />
                </div>
              </form>
            </div>
          </div>
          <div class="card mt-4">
            <div class="card-body">
              <h4>Récapitulatif du panier</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th>Produit</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="item in cartItems" :key="item.name">
                    <td>{{ item.name }}</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item.unitPrice }}€</td>
                    <td>{{ item.totalPrice }}€</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="3" class="text-right">Total à payer:</th>
                    <th>{{ cartTotal }}€</th>
                  </tr>
                </tfoot>
              </table>
              <button type="submit" class="btn btn-primary btn-block" @click="submitOrder">
                Procéder au paiement
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Checkout-',
  data() {
    return {
      billing: {
        fullName: '',
        email: '',
        address: '',
        city: '',
        postalCode: '',
        country: ''
      },
      payment: {
        cardName: '',
        cardNumber: '',
        expiryDate: '',
        cvv: ''
      },
      cartItems: [
        { name: 'Pomme', quantity: 3, unitPrice: 1.0, totalPrice: 3.0 },
        { name: 'Banane', quantity: 5, unitPrice: 0.5, totalPrice: 2.5 },
        { name: 'Orange', quantity: 2, unitPrice: 1.2, totalPrice: 2.4 }
      ]
    }
  },
  computed: {
    cartTotal() {
      return this.cartItems.reduce((total, item) => total + item.totalPrice, 0).toFixed(2)
    }
  },
  methods: {
    submitOrder() {
      alert('Commande soumise avec succès !')
    }
  }
}
</script>

<style scoped>
.container {
  margin-top: 50px;
}

.card {
  margin-bottom: 20px;
}

.card-body {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
