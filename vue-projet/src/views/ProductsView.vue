<template>
  <div>
    <h1 class="text-center mt-5">Liste des produits</h1>
    
    <!-- Intégration du composant FetchProducts -->
    <FetchProducts />
  </div>
</template>

<script>
import FetchProducts from '@/components/FetchProducts.vue'

export default {
  name: 'ProductsView',
  components: {
    FetchProducts,
  },
}
</script>

<style scoped>
/* Ajoutez vos styles ici si nécessaire */
</style>
