import { createRouter, createWebHistory } from 'vue-router'
import LoginPage from '../views/LoginPage.vue'
import RegisterView from '../views/RegisterView.vue'
import UserInformationView from '../views/UserInformationView.vue'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'

const routes = [
  {
    path: '/',
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
    path: '/aboutPage',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    // component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
    component: AboutView
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
