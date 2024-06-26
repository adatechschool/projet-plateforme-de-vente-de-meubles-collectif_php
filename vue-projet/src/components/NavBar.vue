<template>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!-- <img src="@/assets/burger-bar.png" alt="icon burger" style="height: 40px;"> -->
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="accueil.html">Accueil</a>
            <a class="dropdown-item" href="login.html">Connexion</a>
            <a class="dropdown-item" href="commande.html">Commandes</a>
            <a class="dropdown-item" href="catalogue.html">Catalogue</a>
            <a class="dropdown-item" href="panier.html">Panier</a>
            <a class="dropdown-item" href="register.html">S'inscrire</a>
            <a class="dropdown-item" href="checkout.html">Checkout</a>
            <a class="dropdown-item" href="moncompte.html">Mon compte</a>
            <a class="dropdown-item" href="contact.html">Contact</a>
            <a class="dropdown-item" href="faq.html">FAQ</a>
            <a class="dropdown-item" href="politique.html">Politique</a>
          </div>
        </li>
      </ul>
      <a class="navbar-brand" href="#">
        <!-- <img src="@/assets/img-femme.png" alt="logo" style="height: 40px;"> -->
      </a>
      <div class="search-bar mx-auto">
        <form class="form-inline w-auto" action="#" method="GET">
          <input class="form-control mr-xl-5 search-input" type="search" placeholder="Rechercher un produit, une catégorie..." aria-label="Search">
        </form>
      </div>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="btn btn-outline-primary" href="/connexion">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ml-2" href="/inscription">Inscription</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
</template><script>
export default {
  name: 'NavBar'
}
</script><style scoped>
.container{
  margin-bottom: 130%;
  width: 1000%;
  margin-left: -35%;


}
/* Ajoutez ici vos styles personnalisés */
.navbar-brand img {
  height: 40px;
}
.search-input {
  width: 300px;
}
</style>