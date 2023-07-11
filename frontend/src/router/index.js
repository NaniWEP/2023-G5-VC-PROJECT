import { createRouter, createWebHistory } from "vue-router";
import ProfileDetail from "../views/student_profile/DetailPage.vue";
import FavoritePage from "../views/student_profile/FavoritePage.vue";
import LoginPage from '../views/LoginPage.vue'
import RegisterView from '../views/RegisterView.vue'
import UserInformationView from '../views/UserInformationView.vue'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import University from '../views/UniversityView.vue'
import UniversityDetal from '../components/UnivercityDetailComponent.vue'
import workshopPost from '../components/WorkshopPost/WorkshopFormPost.vue'
const routes = [
  
  {
    path: "/formPostWorkshop",
    name: "workshopPost",   
    component: workshopPost,
  },
  {
    path: "/detailPage",
    name: "detailPage",   
    component: ProfileDetail,
  },
  {
    path: "/favoritePage",
    name: "favoritePage",
    component: FavoritePage,
  },
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
  },
  {
    path: '/universityPage',
    name: 'university',
    component: University
  },
  {
    path: '/universityDetail/:id',
    name: 'universityDetail',
    component: UniversityDetal,
    props: true
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
