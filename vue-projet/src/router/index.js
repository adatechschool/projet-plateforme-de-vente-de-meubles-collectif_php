import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ProductsView from '@/views/ProductsView.vue'
import LoginView from '@/views/LoginView.vue'
import SignupView from '@/views/SignupView.vue'
import Checkoutview from '@/views/Checkoutview.vue'
import Cart from '../components/Cart.vue'
import TeamView from '@/views/TeamView.vue'

const routes = [

 
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (About.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import('../views/AboutView.vue')
  },
  {
    path: '/products',
    name: 'products',
    component: ProductsView
  },
  {
    path: '/login',
    name: 'login',
    component: LoginView
  },
  {
    path: '/signup',
    name: 'signup',
    component: SignupView
  },
  {
    path: '/checkout',
    name: 'checkout',
    component: Checkoutview
  },
  {
    path: '/cart',
    name: 'cart',
    component: Cart
  },
  {
    path: '/team',
    name: 'team',
    component : TeamView
  }, 

]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/products',
      name: 'products',
      component: ProductsView


    },
    {
      path: '/login',
      name: 'login',
      component: LoginView

    },
    {
      path: '/signup',
      name: 'signup',
      component: SignupView
    },
    
    
    
  ]

})

export default router
