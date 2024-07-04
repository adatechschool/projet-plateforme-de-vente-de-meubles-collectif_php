<template>
  <!-- <div class="temps"> -->

  <section id="spitch">
    <div class="container mt-5">
      <div class="col-12">
        <h2 class="text-center mb-4">Pourquoi le bon meuble ?</h2>
      </div>
    </div>
    <p class="first text-center mr-5 fs-5">
      Des meubles stylés et robustes : Que vous cherchiez un canapé pour vos soirées Netflix ou une
      table pour vos dîners animés, nous avons ce qu'il vous faut.
    </p>
    <p class="first text-center mr-5 fs-5">
      Une expérience utilisateur fluide : Grâce à Constance et Charlène, acheter chez nous est plus
      simple que de monter un meuble IKEA (promis, sans vis manquante).
    </p>
    <p class="first text-center mr-5 fs-5">
      Un service clientèle au top : Si vous avez des questions, Mary et Naïma sont là pour vous
      aider, avec un sourire (et peut-être une blague) en prime.
    </p>
    <p class="first text-center mr-5 fs-5">Innovation technologique : Le duo Anaël et Marie garantit des solutions techniques avancées pour une navigation sans accroc sur notre site.</p>
  </section>
  <section id="products">
    <div class="container mt-5">
      <div class="col-12">
        <h2 class="text-center mb-4">Nos coups de ❤️ </h2>
      </div>
    </div>
    <div class="products-list">
      <!-- <div v-for="product in products" :key="product.id" class="product-item">
          <h3>{{ product.name }}</h3>
          <p>{{ product.description }}</p>
        </div> -->

      <img src="@/assets/img/canape-shirin.jpg" class="img-fluid" />

      <img src="@/assets/img/chaise.jpg" class="img-fluid" />

      <img src="@/assets/img/bibliotheque.jpg" class="img-fluid" />

      <img src="@/assets/img/buffet.jpg" class="img-fluid" />

      <img src="@/assets/img/commode-charlotte.jpg" class="img-fluid" />

      <img src="@/assets/img/table-claire.jpg" class="img-fluid" />
    </div>
  </section>
  <footer>
    <h2 class="text-center mb-4">Nos valeurs</h2>
    <ul>
      <div class=" first mr-5 fs-5">
        Le bon goût : Pas question de vous vendre des meubles moches. Jamais. Vraiment jamais.
      </div>
      <div class=" first mr-5 fs-5">
        La qualité : Nos meubles sont testés pour résister aux soirées pyjama les plus endiablées.
      </div>
      <div class=" first mr-5 fs-5">Le fun : Parce que la vie est trop courte pour ne pas rigoler un peu chaque jour.</div>
    </ul>
    <p class=" first mr-5 fs-5">
      Alors, prêts à meubler votre vie avec style et humour ? Venez faire un tour sur LebonMeuble,
      là où chaque meuble a une histoire et chaque développeuse a une blague à raconter.
    </p>
  </footer>

  <!-- </div> -->
</template>

<script>
export default {
  name: 'HomeView'
}
</script>

<style scoped>
header,
footer {
  text-align: center;
  padding: 1em;
}

.temps {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}
#spitch
#products {
  text-align: center;
}

.products-list {
  display: inline-grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: auto auto;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px; /* Espace entre les images */
}

.product-item {
  flex: 1 1 calc(33.333% - 20px); /* Trois éléments par ligne */
  max-width: calc(33.333% - 20px); /* Assure que la largeur maximale est respectée */
  box-sizing: border-box;
}

.product-item img {
  width: 25%;
  max-width: 200px; /* Taille maximale de l'image */
  height: auto;
  display: block;
  margin: 0 auto; /* Centrer l'image horizontalement */
}

.img-fluid {
  width: 100%;
  height: 160pxo;
}

Responsive adjustments @media (max-width: 768px) {
  .product-item {
    flex: 1 1 calc(50% - 20px); /* Ajuste pour deux éléments par ligne sur des écrans moyens */
    max-width: calc(50% - 20px);
  }
}

@media (max-width: 480px) {
  .product-item {
    flex: 1 1 100%; /* Un élément par ligne sur des petits écrans */
    max-width: 100%;
  }
}
</style>
