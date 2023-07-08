import { createRouter, createWebHistory } from "vue-router";
import ProfileDetail from "../views/student_profile/DetailPage.vue";
import FavoritePage from "../views/student_profile/FavoritePage.vue";
import { createRouter, createWebHistory } from 'vue-router'
import LoginPage from '../views/LoginPage.vue'
import RegisterView from '../views/RegisterView.vue'
import UserInformationView from '../views/UserInformationView.vue'
const routes = [
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
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
