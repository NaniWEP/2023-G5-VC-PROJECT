import { createRouter, createWebHistory } from 'vue-router'
import LoginPage from '../views/LoginPage.vue'
import RegisterView from '../views/RegisterView.vue'
import UserInformationView from '../views/UserInformationView.vue'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'

const routes = [
  {
    path: '/login',
    name: 'login',
    component: LoginPage
     
  },
  {
    path: '/register',
    name: 'register',
    component:RegisterView
  },
  {
    path: '/userinformation',
    name: 'userinformation',
    component: UserInformationView
  },
  {
    path: '/',
    name: 'home',
    component:HomeView
  },
  {
    path: '/aboutPage',
    name: 'about',
    component: AboutView
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
