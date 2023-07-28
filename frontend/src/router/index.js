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
import StudentDetail from "../components/dashboards/stundents/StudentDetail/StudentDetailComponent.vue"
import StudentFavoritePage from "../views/Page/dashboards/students/StudentFavoriteView.vue"
import StudentMap from "../views/Page/dashboards/students/StudentMap.vue"
import SearchView from '../views/SearchView.vue'
import UserView from "../components/dashboards/managers/UserView.vue"
import ApplyView from "../views/Page/dashboards/managers/applys/ApplyingView.vue"
import ChartView from "../views/Page/dashboards/managers/charts/ChartView.vue"
import PostView from "../views/Page/dashboards/managers/posts/PostView.vue"
import MajorView from "../views/Page/dashboards/managers/majors/MajorView.vue"
import ExpirationView from "../views/Page/dashboards/managers/expirations/ExpirationView.vue"
import ticketsView from "../components/dashboards/stundents/studentTicket/StudentTicketComponent.vue"
const routes = [
  {
    path: '/',
    name: 'Home',
    component:HomePageView
  },

  {
    path: '/ticket',
    name: 'Ticket',
    component:ticketsView
  },

  {
    path: '/aboutPage',
    name: 'About',
    component: AboutPageView
  },

  {
    path: '/universityPage',
    name: 'University',
    component: UniversityPageView
  },

  {
    path: '/workshopPage',
    name: 'Workshop',
    component: WorkshopView
  },

  {
    path: '/login',
    name: 'Login',
    component: LoginPageView  
  },

  {
    path: '/register',
    name: 'Register',
    component:RegisterPageView
  },

  {
    path: '/universityDetail/:id',
    name: 'University Detail',
    component: UniversityDetalView,
    props: true
  },

  {
    path: '/majorPostDetail/:id',
    name: 'Major Detail',
    component: MajorPostView,
    props: true
  },

  {
    path: '/workshop/workshopDetail/:id',
    name: 'Workshop Detail',
    component:WorkshopDetailView,
    props: true
  },

  {
    path: "/studentDetail",
    name: "Profle",   
    component: StudentDetail,
  },

  {
    path: "/favoritePage",
    name: "Favorite Page",
    component: StudentFavoritePage,
  },
  {
    path: "/map",
    name: "Map Page",
    component: StudentMap,
  },
  
  {
    path: '/searhPage',
    name: 'Search Page',
    component: SearchView,
    props: true
  },

  {
    path: '/user',
    name: 'User',
    component: UserView
  },
  { 
    path: '/apply', 
    name: 'Apply',
    component: ApplyView  
  },
  { 
    path: '/chart', 
    name: 'Chart',
    component: ChartView  
  },
  { 
    path: '/post', 
    name: 'Post',
    component: PostView  
  },
  { 
    path: '/major', 
    name: 'Major',
    component: MajorView  
  },
  { 
    path: '/expiration', 
    name: 'Expiration',
    component: ExpirationView  
  },
]


const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});
router.beforeEach((to, from, next) => {
  // ...`
  let documentTitle = `${ process.env.VUE_APP_TITLE } - ${ to.name }`;
  document.title = documentTitle;
  next()
})
export default router

