<template>
  <footer class="py-5 mt-auto">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>A propos</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Equipe Lebonmeuble</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Notre histoire</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Partenaires</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-2 mb-3">
        <h5>Services</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Suivi commande</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-2 mb-3">
        <h5>En Savoir Plus</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="https://github.com/adatechschool/projet-plateforme-de-vente-de-meubles-collectif_php" class="nav-link p-0 text-muted">Github<img src="@/assets/img/git.png" style="height:25px"></a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        </ul>
      </div>
      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>Copyright © 2024 Lebonmeuble.com. Tous droits réservés.</p>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'FooterFeed'
}
</script>


 
<style scoped>
footer {
  margin-top: auto;
  padding-top: 1rem;
  padding-bottom: 1rem;
}
</style>

