<template>
    <div class="container mt-5">
      <div class="col-12">
        <h2 class="text-center mb-4">Notre équipe</h2>
        <div class="row">
            
          <div class="col-md-4 mb-4" v-for="member in teamMembers" :key="member.name">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ member.name }}</h5>
                <p class="card-text">{{ member.description }}</p>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center mt-4">
          Chez LebonMeuble, nous sommes aussi passionnées par le bon code que par les bonnes blagues. Et parfois, nous pensons que les blagues sont presque aussi importantes que le code. Presque.
        </p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'TeamView',
    data() {
      return {
        teamMembers: [
          { name: 'Anaël', description: 'Le magicien du code, capable de transformer une ligne de bugs en une symphonie de fonctionnalités.' },
          { name: 'Mary', description: 'La reine du design, qui peut rendre une chaise plus stylée que le trône d\'un roi.' },
          { name: 'Constance', description: 'La détective des bugs, qui traque et élimine les erreurs plus vite qu\'un ninja.' },
          { name: 'Marie', description: 'La stratège marketing, capable de vendre un tabouret à une girafe.' },
          { name: 'Charlène', description: 'La spécialiste UX, qui fait en sorte que votre navigation sur notre site soit aussi fluide qu\'un bon café du matin.' },
          { name: 'Naïma', description: 'La gardienne des serveurs, qui veille à ce que notre site reste debout même si votre canapé ne l\'est pas encore.' }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .card {
    transition: transform 0.2s;
  }
  .card:hover {
    transform: scale(1.05);
  }
  .card-title {
    color: #007bff;
  }
  .card-text {
    font-style: italic;
  }
  </style>