import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import University from '../views/UniversityView.vue'
import UniversityDetal from '../components/UnivercityDetailComponent.vue'
const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/aboutPage',
    name: 'about',
    component: AboutView
  },
  {
    path: '/universityPage',
    name: 'university',
    component: University
  },
  {
    path: '/universityDetail',
    name: 'universityDetail',
    component: UniversityDetal
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
