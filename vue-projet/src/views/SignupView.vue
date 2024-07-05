<template>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="row">
            <div class="col-md-6 d-none d-md-block">
              <!-- <img right src="@/assets/img/identifiant.png" alt="icon-login" class="img-fluid"> -->
            </div>
            <div class="card-header">
              <h2>Créer un compte</h2>
            </div>
            <div class="card-body">
              <form @submit.prevent="register">
                <div class="form-group mb-3">
                  <label for="name">Pseudo</label>
                  <input
                    type="text"
                    id="name"
                    v-model="name"
                    class="form-control"
                    placeholder="Entrez votre nom"
                    required
                  />
                </div>
                <!-- <div class="form-group mb-3">
                  <label for="surname">Prénom</label>
                  <input type="text" id="surname" v-model="surname" class="form-control" placeholder="Entrez votre prénom" required>
                </div> -->
                <!-- <div class="form-group mb-3">
                  <label for="number">Numéro de téléphone</label>
                  <input type="text" id="number" v-model="number" class="form-control" placeholder="Entrez votre numéro de téléphone" required>
                </div> -->
                <div class="form-group mb-3">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    id="email"
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
                    id="check1"
                    v-model="rememberMe"
                  />
                  <label class="form-check-label" for="check1">Se souvenir de moi</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">S'INSCRIRE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'RegistrationView',
  data() {
    return {
      name: '',
      surname: '',
      number: '',
      email: '',
      password: '',
      rememberMe: false
    }
  },
  methods: {
    register() {
      // Logic for handling registration goes here
      console.log('Name:', this.name)
      console.log('Surname:', this.surname)
      console.log('Number:', this.number)
      console.log('Email:', this.email)
      console.log('Password:', this.password)
      console.log('Remember Me:', this.rememberMe)
    }
  }
}
</script>

<style scoped>
.container {
  max-width: 800px;
  /* margin-left:30%; */
  /* margin-bottom: %; */
}
.card {
  width: 150%;
  height: 100%;
}

.card-header {
  text-align: center;
}

.card-body {
  padding: 20px;
}
.img-fluid {
  /* max-width: 70%;
    height: 70%;
    margin-left: 65%; */
  max-width: 100%;
  height: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
