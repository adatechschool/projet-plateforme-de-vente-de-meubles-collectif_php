
<template>
 
  <div class="container"> 
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Magasin de Meubles</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
              data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" 
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarColor02" class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <router-link class="nav-link" to="/">Accueil</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/products">Gestion des Produits</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/logins">Connexion</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/signups">S'inscrire</router-link>
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
.container{
  width: 1000%;
  /* margin-left: -35%; */


}
</style>