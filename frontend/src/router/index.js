import { createRouter, createWebHistory } from "vue-router";
import HomePageView from '../views/Page/homes/HomeView.vue'
import AboutPageView from '../views/Page/AboutView.vue'
import UniversityPageView from '../views/Page/universities/UniversityView.vue'
import WorkshopView from '../views/Page/workshops/WorkshopView.vue'
import WorkshopDetailView from '../components/workshops/WorkshopPostDetailComponent.vue'
import LoginPageView from '../views/Page/LoginView.vue'
import RegisterPageView from '../views/Page/registers/RegisterView.vue'
import UniversityDetalView from '../views/Page/universities/UniversityDetailView.vue'
import MajorPostView from '../components/universities/MajorPostDetailComponent.vue'
import StudentDetail from "../views/Page/dashboards/students/StudentDetailView.vue"
import StudentFavoritePage from "../views/Page/dashboards/students/StudentFavoriteView.vue"
// import UserInformationView from '../views/Page/registers/UserInformationView.vue'
import SearchView from '../views/SearchView.vue'
import UserView from "../components/dashboards/managers/UserView.vue"
import ApplyView from "../views/Page/dashboards/managers/applys/ApplyingView.vue"
import ChartView from "../views/Page/dashboards/managers/charts/ChartView.vue"
import PostView from "../views/Page/dashboards/managers/posts/PostView.vue"
import MajorView from "../views/Page/dashboards/managers/majors/MajorView.vue"
import ExpirationView from "../views/Page/dashboards/managers/expirations/ExpirationView.vue"
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
    path: '/majorPostDetail/:id',
    name: 'MajorDetail',
    component: MajorPostView,
    props: true
  },

  {
    path: '/workshop/workshopDetail/:id',
    name: 'majorPost',
    component:WorkshopDetailView,
    props: true
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
    path: '/searhPage',
    name: 'searchPage',
    component: SearchView,
    props: true
  },

  {
    path: '/user',
    name: 'user',
    component: UserView
  },
  { 
    path: '/apply', 
    name: 'apply',
    component: ApplyView  
  },
  { 
    path: '/chart', 
    name: 'chart',
    component: ChartView  
  },
  { 
    path: '/post', 
    name: 'post',
    component: PostView  
  },
  { 
    path: '/major', 
    name: 'major',
    component: MajorView  
  },
  { 
    path: '/expiration', 
    name: 'expiration',
    component: ExpirationView  
  },   
 
]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router

