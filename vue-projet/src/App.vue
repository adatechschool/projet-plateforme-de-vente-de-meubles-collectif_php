<script setup>
import { RouterLink, RouterView } from 'vue-router'
 
import NavBar from '@/components/NavBar.vue'
</script>

<template>

    <div class="wrapper">
    <NavBar />

    </div>

  <RouterView />
</template>
<!-- 
<style scoped>
 .wrapper {
    
  }
/* header {
  line-height: 1.5;
  max-height: 100vh;
}

.logo {
  display: block;
}

nav {
  width: 100%;
  font-size: 12px;
  text-align: center;
  margin-top: 2rem;
}

nav a.router-link-exact-active {
  color: var(--color-text);
}

nav a.router-link-exact-active:hover {
  background-color: transparent;
}

nav a {
  display: inline-block;
  padding: 0 1rem;
  border-left: 1px solid var(--color-border);
}

nav a:first-of-type {
  border: 0;
}

@media (min-width: 1024px) {
  header {
    display: flex;
    place-items: center;
  }

  .logo {
    margin: 0 2rem 0 0;
  }

  

  nav {
    text-align: left;
    font-size: 1rem;

    margin-top: 1rem;
  }
} */
</style> -->
