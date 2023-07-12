import { createRouter, createWebHistory } from "vue-router";
import ProfileDetail from "../views/student_profile/DetailPage.vue";
import FavoritePage from "../views/student_profile/FavoritePage.vue";
import LoginPage from '../views/LoginPage.vue'
import RegisterView from '../views/RegisterView.vue'
import UserInformationView from '../views/UserInformationView.vue'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import SearchView from '../views/SearchView.vue'
import UserView from "../views/Dashboard/UserView.vue"
import ApplyView from "../views/Dashboard/ApplyView.vue"
import ChartView from "../views/Dashboard/ChartView.vue"
import PostView from "../views/Dashboard/PostView.vue"
import MajorView from "../views/Dashboard/MajorView.vue"
import ExpirationView from "../views/Dashboard/ExpirationView.vue"
import DashboardView from "../views/Dashboard/DashboardView.vue"


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
    path: '/searchPage',
    name: 'searchPage',
    component: SearchView,
    props: true
  },
  { path: '/', component: DashboardView  },
  { path: '/user', component: UserView  },
  { path: '/apply', component: ApplyView  },
  { path: '/chart', component: ChartView  },
  { path: '/post', component: PostView  },
  { path: '/major', component: MajorView  },
  { path: '/expiration', component: ExpirationView  },   
]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router

