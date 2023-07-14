import { createRouter, createWebHistory } from "vue-router";
import HomePageView from '../views/Page/HomeView.vue'
import AboutPageView from '../views/Page/AboutView.vue'
import UniversityPageView from '../views/Page/UniversityView.vue'
import WorkshopView from '../views/Page/WorkshopView.vue'

import LoginPageView from '../views/Page/LoginPage.vue'
import RegisterPageView from '../views/Page/RegisterView.vue'

import UniversityDetalView from '../components/UniversityPage/UnivercityDetailComponent.vue'

import WorkshopFormPost from '../components/WorkshopPost/WorkshopFormPost.vue'

import StudentDetail from "../views/StudentDashboard/StudentDetail.vue"
import StudentFavoritePage from "../views/StudentDashboard/StudentFavorite.vue"

import UserInformationView from '../components/Register/UserInformation.vue'

import SearchView from '../views/SearchView.vue'

import UserView from "../components/SchoolManagerDashboard/UserView.vue"

import ApplyView from "../components/SchoolManagerDashboard/ApplyView.vue"
import ChartView from "../components/SchoolManagerDashboard/ChartView.vue"
import PostView from "../components/SchoolManagerDashboard/PostView.vue"
import MajorView from "../components/SchoolManagerDashboard/MajorView.vue"
import ExpirationView from "../components/SchoolManagerDashboard/ExpirationView.vue"
// import DashboardView from "../views/Dashboard/DashboardView.vue"


const routes = [
  {
    path: '/',
    name: 'home',
    component:HomePageView
  },

  {
    path: '/aboutPage',
    name: 'about',
    component: AboutPageView
  },

  {
    path: '/universityPage',
    name: 'university',
    component: UniversityPageView
  },

  {
    path: '/workshopPage',
    name: 'workshop',
    component: WorkshopView
  },

  {
    path: '/login',
    name: 'login',
    component: LoginPageView  
  },

  {
    path: '/register',
    name: 'register',
    component:RegisterPageView
  },

  {
    path: '/universityDetail/:id',
    name: 'universityDetail',
    component: UniversityDetalView,
    props: true
  },

  {
    path: "/formPostWorkshop",
    name: "workshopPost",
    component: WorkshopFormPost,
  },

  {
    path: "/studentDetail",
    name: "detailPage",   
    component: StudentDetail,
  },

  {
    path: "/favoritePage",
    name: "favoritePage",
    component: StudentFavoritePage,
  },
  {
    path: '/userinformation',
    name: 'userinformation',
    component: UserInformationView,
    props: true
  },
  
  {
    path: '/searhPage',
    name: 'searchPage',
    component: SearchView,
    props: true
  },

  {
    path: '/user',
    component: UserView
  },
  { 
    path: '/apply', 
    component: ApplyView  
  },
  { 
    path: '/chart', 
    component: ChartView  
  },
  { 
    path: '/post', 
    component: PostView  
  },
  { 
    path: '/major', 
    component: MajorView  
  },
  { 
    path: '/expiration', 
    component: ExpirationView  
  },   
]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router

