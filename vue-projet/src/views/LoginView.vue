<!-- 
  <template>
     
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="card p-4">
        <div class="col-md-6 d-none d-md-block">
      <img right src="@/assets/img/deco.png" alt="icon-login" class="img-fluid">
        </div>
        <div class="col-md-6"></div>
        <h2 class="text-center mb-4">Connexion</h2>
        <form @submit.prevent="handleLogin">
          <div class="form-group mb-3">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              v-model="email"
              class="form-control"
              placeholder="Entrez votre email"
              
            />
          </div>
          <div class="form-group mb-3">
            <label for="password">Mot de passe</label>
            <input
              type="password"
              id="password"
              v-model="password"
              class="form-control"
              placeholder="Entrez votre mot de passe"
              
            />
          </div>
          <div class="form-check mb-3">
            <input
              type="checkbox"
              class="form-check-input"
              id="rememberMe"
              v-model="rememberMe"
            />
            <label class="form-check-label" for="rememberMe">
              Se souvenir de moi
            </label>
          </div>
          <button type="submit" class="btn btn-primary w-100">
            SE CONNECTER
          </button>
          </form>
      </div>
    </div>
    
  </template>
  
  <script>
  export default {
    name: 'LoginView',
    data() {
      return {
        email: '',
        password: '',
        rememberMe: false,
      };
    },
    methods: {
      handleLogin() {
        // Logic for handling login goes here
        console.log('Email:', this.email);
        console.log('Password:', this.password);
        console.log('Remember Me:', this.rememberMe);
      },
    },
  };
  </script>
  
  <style scoped>
  .container {
    max-width: 500px;
    margin-left: 40%;
    /* margin-bottom: 0%; */
  }
  .card {
    width: 100%;
  }
  .img-fluid{
    max-width: 100%;
    height: 70%;
    margin-left: 50%;
     
  }
  </style> -->

  <template>
    <div class="container d-flex justify-content-center align-items-center vh-100">
      <div class="card p-4">
        <div class="row">
          <div class="col-md-6 d-none d-md-block">
            <img src="@/assets/img/deco.png" alt="icon-login" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-center mb-4">Connexion</h2>
            <form @submit.prevent="handleLogin">
              <div class="form-group mb-3">
                <label for="email">Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  v-model="email"
                  class="form-control"
                  placeholder="Entrez votre email"
                  required
                />
              </div>
              <div class="form-group mb-3">
                <label for="password">Mot de passe</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  v-model="password"
                  class="form-control"
                  placeholder="Entrez votre mot de passe"
                  required
                />
              </div>
              <div class="form-check mb-3">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="rememberMe"
                  name="rememberMe"
                  v-model="rememberMe"
                />
                <label class="form-check-label" for="rememberMe">
                  Se souvenir de moi
                </label>
              </div>
              <button type="submit" class="btn btn-primary w-100">
                SE CONNECTER
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'LoginView',
    data() {
      return {
        email: '',
        password: '',
        rememberMe: false,
      };
    },
    methods: {
      handleLogin() {
        // Logic for handling login goes here
        console.log('Email:', this.email);
        console.log('Password:', this.password);
        console.log('Remember Me:', this.rememberMe);
      },
    },
  };
  </script>
  
  <style scoped>
  .container {
    max-width: 800px;
  }
  .card {
    width: 100%;
  }
  .img-fluid {
    max-width: 100%;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  </style>
  