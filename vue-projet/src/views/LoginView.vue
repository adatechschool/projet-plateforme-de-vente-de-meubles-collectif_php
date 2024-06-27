<template>
     <div class="h-100 d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="" style="width: 200px">
            <div>
        <div>
            <h3>Login</h3>
            <hr />
        </div>
        <form>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" />
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
           
        </form>
    </div>
        </div>
    </div>
</div>
    
  </template>
  
  <script>
  export default {
    name: 'LoginView',
  }
  </script>
  <style scoped>
  .row{
    display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  
  
  }
  /* Ajoutez ici vos styles personnalisés */
  /* .navbar-brand img {
    height: 40px;
  }
  .search-input {
    width: 300px;
  } */
  </style>