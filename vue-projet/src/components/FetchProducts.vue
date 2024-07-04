<template>
    <div>
      <h1>Products</h1>
      <form></form>
      <ul>
        <li v-for="product in products" :key="product.id">
          <img :src="product.image" :alt="product.name" class="product-image" />
          {{ product.name }}</li>
      </ul>
    </div>
  </template>
  
  <script setup>
import { ref, onMounted } from 'vue'
import axios from 'axios'

const products = ref([])

onMounted(() => {
  axios.get('http://localhost:8000/api/products')
    .then(response => {
        console.log("succes", response)
      products.value = response.data
    })
    .catch(error => {
      console.error(error)
    })
})
</script>
