import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/history',
    name: 'history',
    component: () => import( '../views/historyView.vue')
  },
  {
    path: '/rent',
    name: 'rent',
    component: () => import( '../views/rentalTermsView.vue')
  },
  {
    path: '/ourCars',
    name: 'ourCars',
    component: () => import( '../views/ourCarListView.vue')
  },
  {
    path: '/profile',
    name: 'profile',
    component: () => import( '../views/profilePageView.vue')
  },
  {
    path: '/log-in',
    name: 'log-in',
    component: () => import( '../views/logInView.vue')
  },
  {
    path: '/register',
    name: 'register',
    component: () => import( '../views/registerView.vue')
  },
  {
    path: '/car',
    name: 'car',
    component: () => import('../views/carView.vue')
  },
  {
    path: '/changePassword',
    name: 'changePassword',
    component: () => import('../views/changePasswordView.vue')
  },
  {
    path: '/rentedCar',
    name: 'rentedCar',
    component: () => import('../views/rentedCarView.vue')
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router