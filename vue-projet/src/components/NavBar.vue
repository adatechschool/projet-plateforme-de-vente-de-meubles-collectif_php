<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LeBonmeuble</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> -->
                <!-- <img src="@/assets/img/git.png" alt="icon burger" style="height: 10px;"> -->
              <!-- </a> -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="accueil.html">Accueil</a></li>
                <li><a class="dropdown-item" href="login.html">Connexion</a></li>
                <li><a class="dropdown-item" href="commande.html">Commandes</a></li>
                <li><a class="dropdown-item" href="catalogue.html">Catalogue</a></li>
                <li><a class="dropdown-item" href="panier.html">Panier</a></li>
                <li><a class="dropdown-item" href="register.html">S'inscrire</a></li>
                <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                <li><a class="dropdown-item" href="moncompte.html">Mon compte</a></li>
                <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                <li><a class="dropdown-item" href="politique.html">Politique</a></li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <router-link class="nav-link" to="/">Accueil</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/products">Produits</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/login">Connexion</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/signup">S'inscrire</router-link>
            </li>
            <!-- <li class="nav-item">
              <router-link class="nav-link" to="/checkout">Paiement</router-link>
            </li> -->
            <li class="nav-item">
              <router-link class="nav-link" to="/cart">Panier</router-link>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'NavBar'
}
</script>

<style scoped>
.container {
  width: 100vw;
}
</style>
