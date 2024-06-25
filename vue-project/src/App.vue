<template>
  <!-- <HelloWorld :sub-title=" subTitle "/>
  <input type="text" v-model="subTitle"> -->
  <HelloWorld :user="user"  />

<input type="text" v-model="user.name">
<input type="text" v-model="user.age">
</template>

<script setup>
import HelloWorld from '@/components/HelloWorld.vue';
import { reactive } from 'vue';
// const subTitle = ref("Bienvenue, sur Vue.js")
const user = reactive({
name: "Anaël",
age : 21,
})

// const display = () => {
//   console.log(user);
// }
// display()
</script>



<style scoped>

</style>
