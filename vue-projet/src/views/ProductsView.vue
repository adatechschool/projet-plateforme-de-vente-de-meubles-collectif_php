<template>
  <div>
    <h1 class="text-center mt-5">Notre Collection de Meubles</h1>
    <p class="text-center mt-4">
      Bienvenue dans l'Univers Unique de Nos Meubles Explorez notre gamme de meubles qui sortent de
      l'ordinaire et apportent une touche d'originalité à votre intérieur. Chaque pièce est conçue
      avec soin pour offrir à la fois fonctionnalité et esthétique, vous permettant de créer un
      espace qui vous ressemble vraiment. Découvrez des designs innovants, des matériaux de qualité
      et une attention aux détails qui font toute la différence.
    </p>
    <!-- Intégration du composant FetchProducts -->
    <FetchProducts />
  </div>
</template>

<script>
import FetchProducts from '@/components/FetchProducts.vue'

export default {
  name: 'ProductsView',
  components: {
    FetchProducts
  }
}
</script>

<style scoped>
/* Ajoutez vos styles ici si nécessaire */
</style>
