import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/history-page',
    name: 'history-page',
    component: () => import( '../views/historyView.vue')
  },
  {
    path: '/rental-terms',
    name: 'rental-terms',
    component: () => import( '../views/rentalTermsView.vue')
  },
  {
    path: '/our-car-list',
    name: 'our-car-list',
    component: () => import( '../views/ourCarListView.vue')
  },
  {
    path: '/profile-page',
    name: 'profile-page',
    component: () => import( '../views/profilePageView.vue')
  },
  {
    path: '/log-in',
    name: 'log-in',
    component: () => import( '../views/logInView.vue')
  },
  {
    path: '/register-page',
    name: 'register-page',
    component: () => import( '../views/registerView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router