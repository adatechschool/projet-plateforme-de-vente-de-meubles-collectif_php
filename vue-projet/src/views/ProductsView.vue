<template>
  <div class="row">
  </div>
</template>
  
  <script>
export default {
  data() {
    return {
      products: [],
      loading: true,
      errored: false
    }
  },
  mounted () {
    fetch('http://localhost:8000/products')
      .then(response => response.json())
      .then(data => {
        this.items = data
        this.loading = false
      })
      .catch(err => {
        console.log(err)
        this.errored = true
        this.loading = false
      })
  }
}
  </script>
